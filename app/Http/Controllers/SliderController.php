<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use DataTables;
use Image;
use Validator;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function be_page_slider()
    {
        return view('be.be_slider');
    }

    public function be_slider_data(Request $request)
    {
        if ($request->ajax()) {
            $data = Slider::orderBy('id','desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('img', function ($data) { 
                    $url=asset("be_slider_thumb/".$data->img_thumbnail); 
                    return '<img src='.$url.' border="0" width="150px" class="img-rounded" align="center" />'; 
                })
                ->addColumn('action', function($data){
                    $actionBtn = ' <button data-id="'.$data->id.'" data-judul="'.$data->judul.'"
                    data-deskripsi="'.$data->deskripsi.'" data-img="'.asset('be_slider/'.$data->img).'" data-toggle="modal" data-target="#modalupdateproduct" class="delete btn btn-info btn-sm">Update</button>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action','img'])
                ->make(true);
        }
    }

    public function be_slider_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul'     => 'nullable|max:20',
            'deskripsi' => 'nullable|max:50',
            'img'       => 'mimes:jpeg,jpg,png,gif',
            'img_thumbnail'       => 'nullable|mimes:jpeg,jpg,png,gif',
            'status'    => 'nullable'
        ]);
    
        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {
            # code...
            if ($request->img !== null) {
                # code...
                // img
                $filename = time().'.'.$request->img->getClientOriginalExtension();
                $filename2= $request->img->getClientOriginalName();
                $destinationPath  = public_path('/be_slider_thumb');
                $destinationPath2 = public_path('/be_slider');
                // resize & compress
                $imgFile = Image::make($request->img->getRealPath());
                $imgFile->resize(150, null, function ($constraint) {
                    $constraint->aspectRatio();
                    })->save($destinationPath.'/'.$filename);
                
                // $oriImage   = Image::make($request->img->getRealPath())->save($destinationPath2.'/'.$filename2);
                
                $request->img->move(public_path('be_slider'), $filename2);

                $data   = Slider::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'judul'     => $request->judul,
                        'deskripsi' => $request->deskripsi,
                        'img'       => $filename2,
                        'img_thumbnail'       => $filename,
                        'status'    => 'tampil'
                    ]
                );
                
                return response()->json(
                    [
                    'status'  => 200,
                    'message' => 'Slider has been Added'
                    ]
                );
            }else {
                # code...
                $data   = Slider::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'judul'     => $request->judul,
                        'deskripsi' => $request->deskripsi,
                        'status'    => 'tampil'
                    ]
                );
                
                return response()->json(
                    [
                    'status'  => 200,
                    'message' => 'Slider has been Added'
                    ]
                );
            }
            
        }
    }

    public function be_slider_dell(Request $request)
    {
        $data = Slider::where('id', $request->id)->delete();
        return response()->json(
            [
            'status'  => 200,
            'message' => 'Slider has been Deleted'
            ]
        );
    }
}
