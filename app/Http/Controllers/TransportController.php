<?php

namespace App\Http\Controllers;
use App\Models\transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    //
    public function store(){
        $data = [
            'route_name'=>'Sango Ota',
            'number_of_vehicles'=> 4,
            'description'=>'moves from atan to sango ota',
            'route_fare'=> 5000
        ];
        transport::create($data);
        $res = transport::all();
        return $res;
    }
}
