<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;
use App\Location;
class AdminQuanlyCompanies extends Controller {
    
    //danh sach
    public function index() {
        $company = Company::all();
        return view('admin.congty.index')->with([
                    'congty' => $company
        ]);
    }

    //create
    public function create() {
        //$locations = Location::whereNull('location_id')->get();
        //$locations = Locations::find($id);
        //print_r($cate);
        return view('admin.congty.create');
    }

    public function store() {
        $dulieu = request()->all();
        $quyluat = [
            'name' => 'required',
            'address' => 'required',
            'id_location'=> 'integer|min:1',
            'email' => 'required|email|unique:companies',
            'phone'=> 'required|between:10,12',
        ];

        $thongbao = [
            'name.required' => 'Tên không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'id_location.integer' => 'Thuộc công ty không đúng định dạng',
            'id_location.min' => 'Thuộc công ty không đúng định dạng',
            'email.email' => 'Email không đúng định dạng',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.unique' => 'Hiện tại email này đã có',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.between' => 'Số điện thoại không đúng định dạng',
        ];
        

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_companies.them')->withErrors($xuly);
        }
        
        //auth()->user() lay thongg tin cua user dang dang nhap hien tai
        $dulieu['user_id'] = auth()->user()->id;
        dd($dulieu);
        Company::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()->back();
    }

    //sua
    public function edit($id) {
        $company = Company::find($id);
        $locations = Company::whereNull('location_id')->get();

        return view('admin.congty.edit')->with([
                    'company' => $company,
                    '$locations' => $locations
        ]);
    }

    public function update($id) {
        $dulieu = request()->all();
        $quyluat = [
            'name' => 'required',
            'address' => 'required',
            'id_location'=> 'integer|min:1',
            'email' => 'required|email|unique:companies',
            'phone'=> 'required|between:10,12',
        ];

        $thongbao = [
            'name.required' => 'Tên không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'id_location.integer' => 'Thuộc công ty không đúng định dạng',
            'id_location.min' => 'Thuộc công ty không đúng định dạng',
            'email.email' => 'Email không đúng định dạng',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.unique' => 'Hiện tại email này đã có',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.between' => 'Số điện thoại không đúng định dạng',
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_companies.them')->withErrors($xuly);
        }

        $company = Company::find($id);
        $company->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }

    public function destroy($id){
        $company = Company::find($id);
        $company->delete();
        
        return redirect()->back();
    }

}
