<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoreData;

class ApiTest extends Controller
{
    //
    public function index(){
        $data = StoreData::latest()->paginate(10);
        return [
            "status" => 1,
            "data" => $data
        ];
    }

    public function create(){

    }

    public function store(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ]);

        $data = StoreData::create($request->all());
        return [
            "status" => 1,
            "data" => $data
        ];
    }

    public function show(StoreData $data)
    {
        return [
            "status" => 1,
            "data" =>$data
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $item = StoreData::findOrFail($id);
        $status = $item->delete();
        return [
            "status" => $status,
            "msg" => "Data deleted successfully"
        ];
    }
}
