<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Category;
use App\NewJob;
use App\User;
class AdminQuanLyNews extends Controller {
    //danh sach
    public function index() {
        $news = NewJob::all();
        return view('admin.news.index')->with([
                    'news' => $news
        ]);
    }

    //create
    public function create() {
        $categories = Category::all();
        $users = User::all();
        return view('admin.news.create')->with([
                    'categories' => $categories,
                    'users' => $users
        ]);
    }

    public function store() {
        $dulieu = request()->all();

        $quyluat = [
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'user_id' => 'required'
        ];

        $thongbao = [
            'title.required' => 'Tiêu đề không được để trống',
            'content.required' => 'Tiêu đề không được để trống',
            'category_id.required' => 'Thuộc công việc không đúng định dạng ',
            'user_id.required' => 'Thuộc user không đúng định dạng'
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_news.them')->withErrors($xuly);
        }
        $dulieu['user_id'] = auth()->user()->id;
       // dd($dulieu);
        NewJob::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()->back();
    }

    //sua
    public function edit($id) {
        $news = NewJob::find($id);
        $categories = Category::all();
        return view('admin.news.edit')->with([
                    'news' => $news,
                    'categories' => $categories,
        ]);
    }

    public function update($id) {
        $dulieu = request()->all();

        $quyluat = [
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ];

        $thongbao = [
            'title.required' => 'Tiêu đề không được để trống',
            'content.required' => 'Tiêu đề không được để trống',
            'category_id.required' => 'Thuộc công việc không đúng định dạng ',
        ];


        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_news.them')->withErrors($xuly);
        }

        $news = NewJob::find($id);
        $news->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }

    public function destroy($id){
        $news = NewJob::find($id);
        $news->delete();
        
        return redirect()->back();
    }
    public function show($id){
        $news = NewJob::find($id);
        return view('admin.news.show')->with([
                    'news' => $news,
            ]);
    }
    public function thoat(){
       return view('admin.congty.index');
    }
}
