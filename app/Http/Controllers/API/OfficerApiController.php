<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\OfficerResource;
use Illuminate\Support\Facades\DB;
use Validator;


class OfficerApiController extends Controller
{
    public function index()
    {
        $data_officer = DB::table('data_officer')->get();
        return response()->json(['data'=>OfficerResource::collection($data_officer)]);
    }

    public function store(Request $request)
    {
       $validator = Validator::make($request->all(),[
        'officer_id' =>'required',
        'officer_name' =>'required',
        'officer_qr' =>'required',
        'level' =>'required',
        'division' =>'required',
        'birth_date' =>'required',
        'birth_place' =>'required',
        'placement_location' =>'required',
        'pin' =>'required|string|max:8'
       ]);

       if($validator->fails()){
        return response()->json($validator->errors());       
        }


        $data_officer =  DB::table('data_officer')->insert([
            'officer_id' =>$request->officer_id,
            'officer_name' =>$request->officer_name,
            'officer_qr' =>$request->officer_qr,
            'level' =>$request->level,
            'division' =>$request->division,
            'birth_date' =>$request->birth_date,
            'birth_place' =>$request->birth_place,
            'placement_location' =>$request->placement_location,
            'pin' =>$request->pin,
            
        ]);

        return response()->json(['new data officer created successfully.']);
    }


    public function update(Request $request)
    {
        $data_officer=DB::table('data_officer')->where('company_id', $request->company_id)->update([
            'officer_id' =>$request->officer_id,
            'officer_name' =>$request->officer_name,
            'officer_qr' =>$request->officer_qr,
            'level' =>$request->level,
            'division' =>$request->division,
            'birth_date' =>$request->birth_date,
            'birth_place' =>$request->birth_place,
            'placement_location' =>$request->placement_location,
            'pin' =>$request->pin,

        ]);
        return response()->json(['data officer updated successfully.']);
    }

    public function destroy($id)
    {
        DB::table('data_officer')->where('company_id',$id)->delete();
        return response()->json(['data officer deleted successfully.']);
    }
}
