<?php

namespace App\Http\Controllers;
use App\Models\Ajakan;
use Validator;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function be_invitation_page()
    {
        $data = Ajakan::where('id',1)->first();
        return view('be.be_ajakan',compact('data'));
    }

    public function be_invitation_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul_mini'    => 'required|max:50',
            'judul_heading' => 'required|max:50',
            'deskripsi'     => 'max:255',
            'bg'            => 'mimes:jpeg,jpg,png,gif',            
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
                # img tidak kosong code...
                $filename1 = time().'.'.$request->bg->getClientOriginalExtension();
                $request->bg->move(public_path('be_invitation_bg'), $filename1);
            }
            
            if ($request->ttd !== null && $request->img !== null) {
                # ada gambarnya semua code...
                $data   = Ajakan::updateOrCreate(
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
            }elseif ($request->bg !== null) {
                # img tidak ada gambar code...
                $data   = Ajakan::updateOrCreate(
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
            else {
                # kedua gambar tidak ada code...
                $data   = Ajakan::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'judul_mini'     => $request->judul_mini,
                        'judul_heading'  => $request->judul_heading,
                        'deskripsi'      => $request->deskripsi,
                    ]
                );
            }

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Section Invitation Has Been Updated'
                ]
            );
        }
    }

    public function be_invitation_preview(Request $request)
    {
        if(request()->ajax())
        {
            $data = Ajakan::where('id', 1)->first();
            $url=asset("be_invitation_bg/".$data->bg); 
            return response()->json('
            <div class="container clearfix">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-md-6 text-center">
                                    <div class="box_1" data-cue="slideInUp">
                                        <h2>'.$data->judul_heading.' <span style="font-size: 16px">'.$data->judul_mini.'</span></h2>
                                        <p>'.$data->deskripsi.'</p>
                                    </div>
                                </div>
                            </div>
                        </div>
            ', 200);
        }
    }
}
