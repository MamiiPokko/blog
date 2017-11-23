<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Staff;
use App\Hotel;
use App\Owner;
use App\Customer;
use Validator;
use Redirect;

class AdminController extends Controller
{


    public function editstaff($id)
    {
        $staff = Staff::find($id);
        
        return view('admin.editstaff', compact('staff'));
    }

    public function updatestaff(Request $request, $id)
    {
        $staff = Staff::find($id);
        $staff->name = $request->input('name');
        $staff->surname = $request->input('surname');
        $staff->gender = $request->input('gender');
        $staff->dob = $request->input('dob');
        $staff->address = $request->input('address');
        $staff->tel = $request->input('tel');
        $staff->save();

        return redirect('lists');
    }

    public function deletestaff($id)
    {
        $staff = Staff::find($id)->delete();

        return back();
    }

    public function editroom($id)
    {
        $hotel = Hotel::find($id);

        return view('admin.editroom', compact('hotel'));
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
        return redirect('hotel');
    }

    public function deleteroom($id)
    {
        $hotel = Hotel::find($id)->delete();

        return back();
    }

    public function add(Request $request)
    {
        $rules = [
            'name' => 'required',
            'surname' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'tel' => 'required',
        ];
        $messages = [
            'name.required' => 'กรุณาใส่ชื่อ',
            'surname.required' => 'กรุณาใส่นามสกุล',
            'gender.required' => 'กรุณาระบุเพศ',
            'dob.required' => 'กรุณาระบุวันเดือนปีเกิด',
            'address.required' => 'กรุณาระบุที่อยู่',
            'tel.required' => 'กรุณาระบุเบอร์ที่สามารถติดต่อได้',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if ($validator->passes() )
        {
            $staff = new Staff;
            $staff->name = $request->input('name');
            $staff->surname = $request->input('surname');
            $staff->gender = $request->input('gender');
            $staff->dob = $request->input('dob');
            $staff->address = $request->input('address');
            $staff->tel = $request->input('tel');
            $staff->save();
            return Redirect::to('admin/lists');   
        }
        else
            return back()
                ->withErrors($validator->messages()); 

    }

    public function getadd()
    {
    	return view('admin.add');
    }

    public function getlists()
    {
        $staff = Staff::All();

        return view('admin.lists')->with('staff', $staff);
    }

    public function gethotel()
    {
        $hotel = Hotel::All();

        return view('admin.hotel')->with('hotel',$hotel);
    }

    public function getedit()
    {
        return view('admin.edit');
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
            return Redirect::to('admin/hotel');
        }
        else
            return back()
                ->withErrors($validator->messages());
    }

    public function getcustomer()
    {
        $customer = Customer::All();

        return view('admin.customer')->with('customer' ,$customer);
    }

    public function viewcus($id)
    {
        $customer = Customers::find($id);

        return view('admin.viewcus', compact('customer'));
    }

    public function getaddcus()
    {
        return view('admin.addcus');
    }

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $staff = Staff::All();

        return view('admin.lists')->with('staff', $staff);
    }

}