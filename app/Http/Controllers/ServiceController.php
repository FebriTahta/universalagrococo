<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Validator;
use DataTables;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function be_service_page()
    {
        return view('be.be_service');
    }

    public function be_service_data(Request $request)
    {
        if ($request->ajax()) {
            $data = Service::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('img', function ($data) { 
                    $url=asset("be_service/".$data->img); 
                    return '<img src='.$url.' border="0" width="200px height="200px"" class="img-rounded" align="center" />'; 
                })
                ->addColumn('deskripsi', function ($data) {
                    if (strlen($data->deskripsi) > 50) {
                        # code...
                        return substr($data->deskripsi,0,50).' [...]';
                    } else {
                        # code...
                        return $data->deskripsi;
                    }
                })
                ->addColumn('action', function($data){
                    $actionBtn = ' <button data-id="'.$data->id.'" data-name="'.$data->name.'"
                    data-deskripsi="'.$data->deskripsi.'" data-img="'.asset('be_product/'.$data->img).'" data-toggle="modal" data-target="#modalupdateproduct" class="delete btn btn-info btn-sm">Update</button>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action','img','deskripsi'])
                ->make(true);
        }
    }

    public function be_service_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'nullable|max:50',
            'deskripsi' => 'nullable|max:500',
            'img'       => 'mimes:jpeg,jpg,png,gif',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {
            # code...
            // img
            if ($request->img !== null) {
                # code...
                $filename2= $request->img->getClientOriginalName();
            
                $request->img->move(public_path('be_service'), $filename2);
            }
            
            if ($request->img !== null) {
                # code...
                $data   = Service::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'name'      => $request->name,
                        'deskripsi' => $request->deskripsi,
                        'img'       => $filename2,
                    ]
                );
            }else {
                # code...
                $data   = Service::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'name'      => $request->name,
                        'deskripsi' => $request->deskripsi,
                    ]
                );
            }
            
            
            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Service has been Added'
                ]
            );
        }
    }

    public function be_service_dell(Request $request)
    {
        $data = Service::where('id', $request->id)->delete();
        return response()->json(
            [
            'status'  => 200,
            'message' => 'Service has been Deleted'
            ]
        );
    }
}
