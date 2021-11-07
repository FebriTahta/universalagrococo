<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Profile;
use App\Models\Ajakan;
use App\Models\Service;
use DataTables;
use Validator;
use Image;
use App\Models\Imageheader;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $header_about   = Imageheader::where('id',1)->first();
        $data_service   = Service::all();
        $data_invitation= Ajakan::where('id',1)->first();
        $data_contact   = Profile::where('id',1)->first();
        $data_about     = About::where('id',1)->first();
        return view('about.index',compact('data_contact','data_about','data_invitation',
        'header_about','data_service'));
    }

    public function be_page_about()
    {
        $data = About::where('id',1)->first();
        return view('be.be_about',compact('data'));
    }
    public function be_about_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul'     => 'max:20',
            'deskripsi' => 'max:5000',
            'img'       => 'mimes:jpeg,jpg,png,gif',
            'ttd'       => 'mimes:jpeg,jpg,png,gif',            
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
            if ($request->ttd !== null) {
                # ttd tidak kosong code...
                $filename2 = time().'.'.$request->ttd->getClientOriginalExtension();
                $request->ttd->move(public_path('be_img_about_ttd'), $filename2);

            }
            if ($request->img !== null) {
                # img tidak kosong code...
                $filename1 = time().'.'.$request->img->getClientOriginalExtension();
                $request->img->move(public_path('be_img_about'), $filename1);
            }
            
            if ($request->ttd !== null && $request->img !== null) {
                # ada gambarnya semua code...
                $data   = About::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'judul'     => $request->judul,
                        'deskripsi' => $request->deskripsi,
                        'img'       => $filename1,
                        'ttd'       => $filename2,
                    ]
                );
            }elseif ($request->ttd !== null && $request->img == null) {
                # img tidak ada gambar code...
                $data   = About::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'judul'     => $request->judul,
                        'deskripsi' => $request->deskripsi,
                        'ttd'       => $filename2,
                    ]
                );
            }
            elseif ($request->ttd == null && $request->img !== null) {
                # ttd tidak ada gambar code...
                $data   = About::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'judul'     => $request->judul,
                        'deskripsi' => $request->deskripsi,
                        'img'       => $filename1,
                    ]
                );
            }
            else {
                # kedua gambar tidak ada code...
                $data   = About::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'judul'     => $request->judul,
                        'deskripsi' => $request->deskripsi,
                    ]
                );
            }

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'About Us Has Been Updated'
                ]
            );
        }
    }

    public function be_about_preview(Request $request)
    {
        if(request()->ajax())
        {
            $data = About::where('id', 1)->first();
            $url=asset("be_img_about_ttd/".$data->ttd); 
            return response()->json('
            <div class="main_title">
            <span><em></em></span>
            <h2 id="about_header">'.$data->judul.'</h2>
            </div>
            <p>'.$data->deskripsi.'</p>
            <p><img src='.$url.' width="140" height="50" alt="" class="mt-3"></p>
            ', 200);
        }
    }
}
