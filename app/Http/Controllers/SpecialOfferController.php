<?php

namespace App\Http\Controllers;
use App\Models\Specialoffer;
use Validator;
use Image;
use Illuminate\Http\Request;

class SpecialOfferController extends Controller
{
    public function be_special_off_page()
    {
        $data = Specialoffer::where('id',1)->first();
        return view('be.be_specialoffer',compact('data'));
    }

    public function be_special_off_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul_mini'    => 'required|max:20',
            'judul_heading' => 'required|max:20',
            'deskripsi'     => 'max:100',
            'img'           => 'mimes:jpeg,jpg,png,gif,svg',
            'bg'            => 'mimes:jpeg,jpg,png,gif,svg',            
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
                # img tidak kosong code...
                $filename2 = time().'.'.$request->img->getClientOriginalExtension();
                $request->img->move(public_path('be_special_offer_img'), $filename2);

            }
            if ($request->bg !== null) {
                # img tidak kosong code...
                $filename1 = time().'.'.$request->bg->getClientOriginalExtension();
                $request->bg->move(public_path('be_special_offer_bg'), $filename1);
            }
            
            if ($request->bg !== null && $request->img !== null) {
                # ada gambarnya semua code...
                $data   = Specialoffer::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'judul_mini'     => $request->judul_mini,
                        'judul_heading'  => $request->judul_heading,
                        'deskripsi' => $request->deskripsi,
                        'img'       => $filename2,
                        'bg'        => $filename1,
                    ]
                );
            }elseif ($request->bg !== null && $request->img == null) {
                # img tidak ada gambar code...
                $data   = Specialoffer::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'judul_mini'     => $request->judul_mini,
                        'judul_heading'  => $request->judul_heading,
                        'deskripsi' => $request->deskripsi,
                        'bg'        => $filename1,
                    ]
                );
            }
            elseif ($request->bg == null && $request->img !== null) {
                # bg tidak ada gambar code...
                $data   = Specialoffer::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'judul_mini'     => $request->judul_mini,
                        'judul_heading'  => $request->judul_heading,
                        'deskripsi' => $request->deskripsi,
                        'img'       => $filename2,
                    ]
                );
            }
            else {
                # kedua gambar tidak ada code...
                $data   = Specialoffer::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'judul_mini'     => $request->judul_mini,
                        'judul_heading'  => $request->judul_heading,
                        'deskripsi' => $request->deskripsi,
                    ]
                );
            }

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Section Special Offers Has Been Updated'
                ]
            );
        }
    }

    public function be_special_off_preview(Request $request)
    {
        if(request()->ajax())
        {
            $data = Specialoffer::where('id', 1)->first();
            $url=asset("be_special_offer_img/".$data->img); 
            return response()->json('
            <div class="banner lazy">
                            <div class="wrapper d-flex align-items-center justify-content-between opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                                <div>
                                    <small>'.$data->judul_mini.'</small>
                                    <h3>'.$data->judul_heading.'</h3>
                                    <p>'.$data->deskripsi.'</p>
                                </div>
                                <figure class="d-none d-lg-block"><img src='.$url.' alt="" width="200" height="200" class="img-fluid"></figure>
                            </div>
                            <!-- /wrapper -->
                        </div>
            ', 200);
        }
    }
}
