<?php

namespace App\Http\Controllers;
use App\Models\hostel;
use Illuminate\Http\Request;

class HostelController extends Controller
{
    //
    public function store(){
        $data = [
            'name'=>'girls hostel',
            'number_of_rooms'=> 250,
            'description' => 'story building color red'
        ];
        hostel::create($data);
        $res = hostel::all();
        return $res;
    }
}
