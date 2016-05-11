<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Report;
class AdminQuanLyReport extends Controller {
    
    //danh sach
    public function index() {
        $report = Report::all();
        return view('admin.baocao.index')->with([
                    'baocao' => $report
        ]);
    }

    //create
    public function create() {
        return view('admin.baocao.create')->with([
                   
        ]);
    }

    public function store() {
        $dulieu = request()->all();
        $quyluat = [
            'to_user_id' => 'required',
            'reason' => 'required',
            'from_user_id' => 'required',
             'description' => 'required'
            
        ];

        $thongbao = [
            'to_user_id.required' => 'Không được để trống',
            'reason.required' => 'Không được để trống',
            'from_user_id.required' => 'Không được để trống',
            'description.required' => 'Không được để trống'
      ];
        

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly-baocao.them')->withErrors($xuly);
        }
        
        //auth()->user() lay thongg tin cua user dang dang nhap hien tai
        //$dulieu['id_user'] = auth()->user()->id;
        //dd($dulieu);
        Skill::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()->back();
    }
    
    //sua
    public function edit($id) {
        $report = Report::find($id);
        return view('admin.baocao.edit')->with([
                    'baocao' => $report,
                    
        ]);
    }

    public function update($id) {
        $dulieu = request()->all();
        $quyluat = [
             'to_user_id' => 'required',
            'reason' => 'required',
            'from_user_id' => 'required',
             'description' => 'required'
        ];

        $thongbao = [
             'to_user_id.required' => 'Không được để trống',
            'reason.required' => 'Không được để trống',
            'from_user_id.required' => 'Không được để trống',
            'description.required' => 'Không được để trống'
      ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly-baocao.them')->withErrors($xuly);
        }

        $report= Report::find($id);
        $report->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }

    public function destroy($id){
        $report = Report::find($id);
        $report->delete();
        
        return redirect()->back();
    }
     public function show($id){
        $report = Report::find($id);
        return view('admin.quanly-baocao.show')->with([
                    '$report' => $report,
            ]);
    }

}
