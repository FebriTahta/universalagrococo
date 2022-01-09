<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Imageheader;
use DataTables;
use Validator;
use Image;
use App\Models\Komentar;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $header_product = Imageheader::where('id',2)->first();
        $data_contact   = Profile::where('id',1)->first();
        $data_product   = Product::all();
        // return view('product.list',compact('data_contact','data_product','header_product'));
        return view('new.product',compact('data_contact','data_product','header_product'));
    }

    public function detail($slug_product)
    {
        $header_blog    = Imageheader::where('id',4)->first();
        $data_product   = Product::where('slug',$slug_product)->first();
        $data_contact   = Profile::where('id',1)->first();
        $komentar       = Komentar::where('product_id',$data_product->id)->get();
        $data_product_random = Product::inRandomOrder(3)->get();
        return view('product.detail',compact('data_contact','data_product','data_product_random',
        'header_blog','komentar'));
    }

    // Str::slug()

    public function be_product_page()
    {
        return view('be.be_product');
    }

    public function be_product_data(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::orderBy('id','desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('img', function ($data) { 
                    $url=asset("be_product_thumb/".$data->img_thumbnail); 
                    return '<img src='.$url.' border="0" width="200px height="200px"" class="img-rounded" align="center" />'; 
                })
                ->addColumn('deskripsi', function ($data) { 
                    return substr($data->deskripsi,0,50).' [...]';
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

    public function be_product_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'nullable',
            'deskripsi' => 'nullable',
            'img'       => 'nullable|mimes:jpeg,jpg,png,gif',
            'img_thumbnail'       => 'nullable|mimes:jpeg,jpg,png,gif',            
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
                $filename = time().'.'.$request->img->getClientOriginalExtension();
                $filename2= $request->img->getClientOriginalName();
                $destinationPath  = public_path('/be_product_thumb');

                // resize & compress
                $imgFile = Image::make($request->img->getRealPath());
                $imgFile->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
                })->save($destinationPath.'/'.$filename);
            
            
                $request->img->move(public_path('be_product'), $filename2);
            }
            
            if ($request->img !== null) {
                # code...
                $data   = Product::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'name'      => $request->name,
                        'slug'      => Str::slug($request->name),
                        'deskripsi' => $request->deskripsi,
                        'img'       => $filename2,
                        'img_thumbnail'       => $filename,
                        'status'    => 'tampil'
                    ]
                );
            }else {
                # code...
                $data   = Product::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'name'      => $request->name,
                        'slug'      => Str::slug($request->name),
                        'deskripsi' => $request->deskripsi,
                        'status'    => 'tampil'
                    ]
                );
            }
            
            
            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Product has been Added'
                ]
            );
        }
    }

    public function be_product_dell(Request $request)
    {
        $data = Product::where('id', $request->id)->delete();
        return response()->json(
            [
            'status'  => 200,
            'message' => 'Product has been Deleted'
            ]
        );
    }
}
