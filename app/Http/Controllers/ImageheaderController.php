<?php

namespace App\Http\Controllers;
use App\Models\Imageheader;
use DataTables;
use App\Models\Linkbutton;
use Validator;

use Illuminate\Http\Request;

class ImageheaderController extends Controller
{
    public function social_link(Request $request)
    {
        if ($request->ajax()) {
            $data = Linkbutton::orderBy('id','desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                
                ->addColumn('action', function($data){
                    $actionBtn = ' <button data-id="'.$data->id.'" data-name="'.$data->name.'" data-link="'.$data->link.'" data-toggle="modal" data-target="#modalupdate" class="delete btn btn-info btn-sm">Update</button>';
                    $actionBtn.= ' <a data-target="#modalhapus" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function social_link_dell(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'    => 'required',
        ]);
        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {
            if (Linkbutton::find($request->id) == null) {
                # code...
                return response()->json(
                    [
                    'status'  => 200,
                    'message' => 'Social Media Tersebut Sudah Dihapus'
                    ]
                );
            }else {
                # code...
                Linkbutton::find($request->id)->delete();
                return response()->json(
                    [
                    'status'  => 200,
                    'message' => 'Link Social Media Has Been Removed'
                    ]
                );
            }
            
        }
    }

    public function social_link_post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'    => 'required',
            'link' => 'required',
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
            
                # code...
                $data   = Linkbutton::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'name'      => $request->name,
                        'link'      => $request->link,
                    ]
                );
            
            
            
            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Link Social Media Has Been Added'
                ]
            );
        }
    }

    public function be_imagehead_page()
    {
        $header_about   = Imageheader::where('id',1)->first();
        $header_product = Imageheader::where('id',2)->first();
        $header_contact = Imageheader::where('id',3)->first();
        $header_blog    = Imageheader::where('id',4)->first();
        return view('be.be_imagehead',compact('header_about','header_product','header_contact','header_blog'));
    }

    public function be_imagehead_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul'    => 'nullable',
            'subjudul' => 'nullable',
            'bg'       => 'nullable|mimes:jpeg,jpg,png,gif',            
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
            if ($request->bg !== null) {
                # code...
                $filename2= $request->bg->getClientOriginalName();
                $request->bg->move(public_path('be_header'), $filename2);
            }
            
            if ($request->bg !== null) {
                # code...
                $data   = Imageheader::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'judul'      => $request->judul,
                        'subjudul'      => $request->subjudul,
                        'bg'       => $filename2,
                    ]
                );
            }else {
                # code...
                $data   = Imageheader::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'judul'      => $request->judul,
                        'subjudul'      => $request->subjudul,
                    ]
                );
            }
            
            
            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Image Header '.$data->judul.' has been Added'
                ]
            );
        }
    }
}
