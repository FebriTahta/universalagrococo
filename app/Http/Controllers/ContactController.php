<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Imageheader;
use App\Models\Profile;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $header_contact = Imageheader::where('id',3)->first();
        $data_contact = Profile::where('id',1)->first();
        return view('contact.index',compact('data_contact','header_contact'));
    }

    public function be_contact_page()
    {
        $data = Profile::where('id',1)->first();
        return view('be.be_contact',compact('data'));
    }

    public function be_contact_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email',
            'alamat'    => 'required|max:255',
            'telp'      => 'required',
            'whatsapp'  => 'required',            
            'lokasi'    => 'required',
            'img_light' => 'mimes:jpeg,jpg,png,gif,svg',
            'img_dark'  => 'mimes:jpeg,jpg,png,gif,svg',            
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
            if ($request->img_light !== null) {
                # ttd tidak kosong code...
                $filename2 = time().'.'.$request->img_light->getClientOriginalExtension();
                $request->img_light->move(public_path('be_contact_logo'), $filename2);

            }
            if ($request->img_dark !== null) {
                # img tidak kosong code...
                $filename1 = time().'.'.$request->img_dark->getClientOriginalExtension();
                $request->img_dark->move(public_path('be_contact_logo'), $filename1);
            }
            
            if ($request->img_light !== null && $request->img_dark !== null) {
                # ada gambarnya semua code...
                $data   = Profile::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'email'     => $request->email,
                        'alamat'    => $request->alamat,
                        'telp'      => $request->telp,
                        'whatsapp'  => $request->whatsapp,
                        'lokasi'    => $request->lokasi,
                        'img_light' => $filename2,
                        'img_dark'  => $filename1
                    ]
                );
            }elseif ($request->img_light !== null && $request->img_dark == null) {
                # img dark tidak ada gambar code...
                $data   = Profile::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'email'     => $request->email,
                        'alamat'    => $request->alamat,
                        'telp'      => $request->telp,
                        'whatsapp'  => $request->whatsapp,
                        'lokasi'    => $request->lokasi,
                        'img_light' => $filename2,
                    ]
                );
            }
            elseif ($request->img_light == null && $request->img_dark !== null) {
                # img light tidak ada gambar code...
                $data   = Profile::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'email'     => $request->email,
                        'alamat'    => $request->alamat,
                        'telp'      => $request->telp,
                        'whatsapp'  => $request->whatsapp,
                        'lokasi'    => $request->lokasi,
                        'img_dark'  => $filename1
                    ]
                );
            }
            else {
                # kedua gambar tidak ada code...
                $data   = Profile::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'email'     => $request->email,
                        'alamat'    => $request->alamat,
                        'telp'      => $request->telp,
                        'whatsapp'  => $request->whatsapp,
                        'lokasi'    => $request->lokasi,
                    ]
                );
            }

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Contact Profile Has Been Updated'
                ]
            );
        }
    }

}
