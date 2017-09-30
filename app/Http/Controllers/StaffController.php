<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Staff;
use App\Hotel;
use App\Owner;
use App\Customer;
use Validator;
use Redirect;

class StaffController extends Controller
{
    public function editroom($id)
    {
        $hotel = Hotel::find($id);

        return view('member.editroom', compact('hotel'));
    }

    public function updateroom(Request $request, $id)
    {
        $hotel = Hotel::find($id);
        $hotel->roomtype = $request->input('roomtype');
        $hotel->wifi = $request->input('wifi');
        $hotel->parking = $request->input('parking');
        $hotel->air = $request->input('air');
        $hotel->rates = $request->input('rates');
        $hotel->descrip = $request->input('descrip');
        $hotel->save();
        return redirect('member/hotel');
    }

    public function deleteroom($id)
    {
        $hotel = Hotel::find($id)->delete();

        return back();
    }
    public function gethotel()
    {
        $hotel = Hotel::All();

        return view('member.hotel')->with('hotel',$hotel);;
    }

    public function getedit()
    {
        return view('member.edit');
    }

    public function edit(Request $request)
    {
        $rules = [
            'roomtype' => 'required',
            'wifi' => 'required',
            'parking' => 'required',
            'air' => 'required',
            'rates' => 'required',
        ];
        $messages = [
            'roomtype.required' => 'กรุณาเลือกประเภทห้อง',
            'wifi.required' => 'กรุณาเลอืก',
            'parking.required' => 'กรุณาเลือก',
            'air.required' => 'กรุณาเลือก',
            'rates.required' => 'กรุณาระบุรายละเอียด',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if ($validator->passes() )
        {
            $hotel = new Hotel;
            $hotel->roomtype = $request->input('roomtype');
            $hotel->wifi = $request->input('wifi');
            $hotel->parking = $request->input('parking');
            $hotel->air = $request->input('air');
            $hotel->rates = $request->input('rates');
            $hotel->descrip = $request->input('descrip');
            $hotel->save();
            return Redirect::to('member/hotel');
        }
        else
            return back()
                ->withErrors($validator->messages());
    }

    public function __construct()
    {
        $this->middleware('member');
    }


}
