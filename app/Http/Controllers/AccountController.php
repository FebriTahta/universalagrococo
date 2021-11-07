<?php

namespace App\Http\Controllers;
use App\Models\User;
use DataTables;
use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function be_account_page()
    {
        return view('be.be_account');
    }

    public function be_account_data(Request $request)
    {
        if ($request->ajax()) {
            $data = User::orderBy('id','desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action','komen'])
                ->make(true);
        }
    }

    public function be_account_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:50',
            'email'    => 'required|max:255|unique:users',       
        ]);
    
        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {
            # code...
            
            $data   = User::updateOrCreate(
                [
                    'id' => $request->id
                ],
                [
                    'name'     => $request->name,
                    'email'    => $request->email,
                    'password' => Hash::make($request->password),
                    'role'     => 'admin',
                ]
            );

            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'New Account Has Been Added'
                ]
            );
        }
    }

    public function be_account_dell(Request $request)
    {
        $data = User::where('id', $request->id)->delete();
        return response()->json(
            [
              'status'  => 200,
              'message' => 'Account Has Been Deleted'
            ]
        );

    }
}
