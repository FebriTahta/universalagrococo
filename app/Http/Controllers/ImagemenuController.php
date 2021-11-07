<?php

namespace App\Http\Controllers;
use App\Models\Imagemenu;
use Validator;
use Illuminate\Http\Request;

class ImagemenuController extends Controller
{
    public function be_imagemenu_page()
    {
        $menu_product   = Imagemenu::where('id',1)->first();
        $menu_contact   = Imagemenu::where('id',2)->first();
        $menu_profile   = Imagemenu::where('id',3)->first();
        return view('be.be_imagemenu',compact('menu_product','menu_contact','menu_profile'));
    }

    public function be_imagemenu_store(Request $request)
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
                $request->bg->move(public_path('be_menu'), $filename2);
            }
            
            if ($request->bg !== null) {
                # code...
                $data   = Imagemenu::updateOrCreate(
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
                $data   = Imagemenu::updateOrCreate(
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
                  'message' => 'Image Menu '.$data->judul.' has been Added'
                ]
            );
        }
    }
}
