<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Validator;
use DataTables;
use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function client_store(Request $request)
    {
        $data   = Client::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'telp'=> $request->telp,
                'nama'     => $request->nama,
                'komen'  => $request->komen,
                'email' => $request->email,
                'slug' => Str::slug(time().'-'.$request->nama),
            ]
        );
        return redirect('/message-sent/'.$data->slug);
    }

    public function after_message($slug_client)
    {
        $data_contact = Profile::where('id',1)->first();
        $data = Client::where('slug',$slug_client)->first();
        return view('after_message.index',compact('data','data_contact'));
    }

    public function be_client_page()
    {
        return view('be.be_client');
    }

    public function be_client_data(Request $request)
    {
        if ($request->ajax()) {
            $data = Client::orderBy('id','desc')->get();
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
                ->addColumn('action', function($data){
                    $actionBtn = ' <button data-id="'.$data->id.'" data-name="'.$data->nama.'" data-email="'.$data->email.'"
                    data-deskripsi="'.$data->komen.'" data-toggle="modal" data-target="#modalupdateproduct" class="delete btn btn-info btn-sm">Detail</button>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action','komen'])
                ->make(true);
        }
    }

    public function be_client_dell(Request $request)
    {
        $data = Client::where('id', $request->id)->delete();
        return response()->json(
            [
              'status'  => 200,
              'message' => 'Client Message has been Deleted'
            ]
        );
    }
}
