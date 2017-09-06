<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use Response;
use Curl;

class ApiController extends Controller
{
    public function index()
    {
    	$hotelroom = Hotel::get();

    	$data['info'] = $hotelroom;	

    	return Response::json($data);	
    }

    public function getroomtype()
    {
    	// $curl = new Curl;
    	// $curl->get('localhost:8000/testapi');

     //    if ($curl->error) {
     //        # code...
     //    }else{
     //        $data = json_decode($curl->response);
     //    }

    $json_string = file_get_contents("172.26.241.204/blog/public/api/testapi");
    dd($json_string);
    $data = json_decode($json_string);

    dd($data);
       
    }
}