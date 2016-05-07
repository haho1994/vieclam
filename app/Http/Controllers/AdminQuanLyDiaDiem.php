<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Location;

class AdminQuanLyDiaDiem extends Controller {

    //danh sach
    public function index() {
        $locations = Location::all();
        return view('admin.locations.index')->with([
                    'locations' => $locations
        ]);
    }

    //create
    public function create() {
        return view('admin.locations.create')->with([
                   
        ]);
    }

    public function store() {
        $dulieu = request()->all();

        //dd($dulieu);

        $quyluat = [
            'name' => 'required',
        ];

        $thongbao = [
            'name.required' => 'Ten khong dc de trong',
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.diadiem.them')->withErrors($xuly);
        }

        Location::create($dulieu);

        \Session::flash('success', 'Thêm thành công!!');
        return redirect()->back();
    }

    //sua
    public function edit($id) {
        $locations = Location::find($id);
        return view('admin.locations.edit')->with([
                    'locations' => $locations
        ]);
    }

    public function update($id) {
        $dulieu = request()->all();

        //dd($dulieu);

        $quyluat = [
            'name' => 'required'
        ];

        $thongbao = [
            'name.required' => 'Ten khong dc de trong'
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.diadiem.them')->withErrors($xuly);
        }

        $locations = Location::find($id);
        $locations->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }

    public function destroy($id){
        $locations = Location::find($id);
        $locations->delete();
        return redirect()->back();
    }
     public function show($id){
        $locations = Location::find($id);
        return view('admin.locations.show')->with([
                    'locations' => $locations,
            ]);
    }

}
