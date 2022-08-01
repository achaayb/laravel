<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Http\Controllers\API\AppBaseController;


class CountriesController extends AppBaseController
{
    public function index(Request $request){
        $countries = Country::all();
        return $this->sendResponse($countries, "all countries");
    }

    public function show(Request $request, int $id){
        if (Country::find($id)){
            return $this->sendResponse($countries, "country id $id");
        } else {
            return $this->sendError("Not found", 404);
        }
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|alpha',
        ]);
        $data = Country::create(array('name'=>$request->input('name')));
        return $this->sendResponse($data, "inserted country");
    }
}
