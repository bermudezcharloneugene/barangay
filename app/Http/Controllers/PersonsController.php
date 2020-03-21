<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PersonsRequest;
use App\Person;



class PersonsController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(PersonsRequest $request)
    {
        $requests = $request->all();
        $store = new Person;

        $store->image_path = 'asdasdasdasdasd';
        $store->first_name = $request->input('first_name');
        $store->middle_name = $request->input('middle_name');
        $store->last_name = $request->input('last_name');
        $store->street_code = $request->input('street_code');
        $store->address = $request->input('address');
        $store->age = $request->input('age');
        $store->birthday = $request->input('birthday');
        $store->contact_no = $request->input('contact_no');
        $store->gender = $request->input('gender');
        $store->pwd = $request->input('pwd');
        $store->osy = $request->input('osy');
        
        $store->save();
        




    }


}
