<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index(){
        $countries = Country::all();

        return view('admin.country.index', [
            'countries' => $countries
        ]);
    }

    public function create(){
        return view('admin.country.create');
        
    }

    public function store(Request $request){
        Country::query()->create($request->all());
    }

    public function edit(Request $request, $id){
        $country = Country::query()->findOrFail($id);
        return view('admin.country.edit', compact('country'));
    }

    public function update(Request $request, $id){
        $country = Country::query()->findOrFail($id);
        $country->fill($request->all());
        $country->save();

    }

    public function delete($id){
        $country = Country::query()->find($id);
        $country->delete();

    }
}
