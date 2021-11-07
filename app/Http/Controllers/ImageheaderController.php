<?php

namespace App\Http\Controllers;
use App\Models\Imageheader;
use Validator;

use Illuminate\Http\Request;

class ImageheaderController extends Controller
{
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
