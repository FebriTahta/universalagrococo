<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Komentar;
use DataTables;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function komen_store(Request $request)
    {
        $data   = Komentar::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'product_id'=> $request->product_id,
                'nama'     => $request->nama,
                'komen'  => $request->komen,
                'email' => $request->email,
            ]
        );
        return redirect()->back();
    }

    public function be_product_comment_page()
    {
        return view('be.be_produkomen');
    }

    public function be_product_comment_data(Request $request)
    {
        if ($request->ajax()) {
            $data = Komentar::orderBy('id','desc')->with('product')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('komen', function($data){
                    if (strlen($data->komen)>70) {
                        # code...
                        return substr($data->komen,0,70).' [...]';
                    }else{
                        return $data->komen;
                    }
                })
                ->addColumn('product', function($data){
                    return $data->product->name;
                })
                ->addColumn('action', function($data){
                    $actionBtn = ' <button data-id="'.$data->id.'" data-name="'.$data->nama.'" data-email="'.$data->email.'"
                    data-deskripsi="'.$data->komen.'" data-toggle="modal" data-target="#modalupdateproduct" class="delete btn btn-info btn-sm">Detail</button>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action','product','komen'])
                ->make(true);
        }
    }

    public function be_product_comment_dell(Request $request)
    {
        $data = Komentar::where('id',$request->id)->delete();
        return response()->json(
            [
            'status'  => 200,
            'message' => 'Comment has been Deleted'
            ]
        );
    }
}
