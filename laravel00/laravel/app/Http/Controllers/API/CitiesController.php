<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\City;
use App\Http\Controllers\API\AppBaseController;

class CitiesController extends AppBaseController
{
    public function index(Request $request){
        $countries = City::all();
        return $this->sendResponse($countries, "all cities");
    }

    public function show(Request $request, int $id){
        $countries = City::find($id);
        return $this->sendResponse($countries, "city id $id");
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|alpha',
        ]);
        $data = City::create(array('name'=>$request->input('name'), 'country_id'=>$request->input('country_id')));
        return $this->sendResponse($data, "inserted city");
    }
}