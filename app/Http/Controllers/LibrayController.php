<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

include "../httpful.phar";

class LibraryController extends Controller
{
    public function getindex()
		{

		$uri = "http://172.26.243.253/blog/public/api/testapi";
          $response = \Httpful\Request::get($uri)->send();

        return view('library.index')->with('json',$response->body->info);

		
		}
}