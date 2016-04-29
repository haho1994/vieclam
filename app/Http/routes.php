<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/vidu', [
//    'as' => 'vidu',
//    'uses' => 'TrangchuController@index'
//]);
//
//Route::get('dangky', 'TrangchuController@dangky');


Route::get('dangky-vieclam', [
    'as' => 'dangky',
    'uses' => 'TrangchuController@dangKyViecLam'
]);

Route::post('dangky-vieclam', [
    'as' => 'xuly.dangky',
    'uses' => 'TrangchuController@xuLyDangKyViecLam'
]);

//Route::get('danhsach-taikhoan', [
//    'as' => 'danhsach.taikhoan',
//    'uses' => 'TrangchuController@danhSachTaiKhoan'
//]);
//
//Route::get('xuly-xoa/{userId}', [
//    'as' => 'xuly.xoa',
//    'uses' => 'TrangchuController@xuLyXoa'
//]);
Route::get('dangnhap', [
    'as' => 'dangnhap',
    'uses' => 'TrangchuController@dangNhapTaiKhoan'
]);
Route::post('dangnhap', [
    'as' => 'xuly.dangnhap',
    'uses' => 'TrangchuController@xuLyDangNhap'
]);

Route::get('timkiem-vieclam', function() {
    return view('timkiem.timkiemvieclam');
});

Route::get('admin/login', [
    'as' => 'admin_login',
    'uses' => 'AdminQuanlyDanhMuc@login'
]);
Route::post('admin/login', [
    'as' => 'admin.login',
    'uses' => 'AdminQuanlyDanhMuc@xuLyLogin'
]);

//danh muc
Route::get('admin/quanly-danhmuc', [
    'as' => 'admin.quanly_danhmuc',
    'uses' => 'AdminQuanlyDanhMuc@index'
]);

Route::get('admin/quanly-danhmuc/them', [
    'as' => 'admin.quanly_danhmuc.them',
    'uses' => 'AdminQuanlyDanhMuc@create'
]);

Route::post('admin/quanly-danhmuc/them', [
    'as' => 'admin.quanly_danhmuc.xuly',
    'uses' => 'AdminQuanlyDanhMuc@store'
]);

Route::get('admin/quanly-danhmuc/sua/{id}', [
    'as' => 'admin.quanly_danhmuc.sua',
    'uses' => 'AdminQuanlyDanhMuc@edit'
]);

Route::post('admin/quanly-danhmuc/luu/{id}', [
    'as' => 'admin.quanly_danhmuc.luu',
    'uses' => 'AdminQuanlyDanhMuc@update'
]);

Route::get('admin/quanly-danhmuc/xoa/{id}', [
    'as' => 'admin.quanly_danhmuc.xoa',
    'uses' => 'AdminQuanlyDanhMuc@destroy'
]);



//capnhaptaikhoan

Route::get('taikhoan/doimatkhau', [
    'as' => 'doimatkhau',
    'uses' => 'TrangchuController@doiMatKhau'
]);
Route::post('taikhoan/doimatkhau', [
    'as' => 'xuly.doimatkhau',
    'uses' => 'TrangchuController@xuLyDoiMatKhau'
]);

Route::get('/test', function() {
    dd(App\User::class);
});

Route::get('admin/logout', function() {
    Auth::logout();
    return redirect()->route('admin_login');
});

Route::group(['middleware' => 'auth'], function() {
    //company
    Route::get('admin/quanly-companies', [
        'as' => 'admin.quanly_companies',
        'uses' => 'AdminQuanlyCompanies@index'
    ]);
    Route::get('admin/quanly-companies/them', [
        'as' => 'admin.quanly_companies.them',
        'uses' => 'AdminQuanlyCompanies@create'
    ]);

    Route::post('admin/quanly-companies/them', [
        'as' => 'admin.quanly_companies.xuly',
        'uses' => 'AdminQuanlyCompanies@store'
    ]);

    Route::get('admin/quanly-companies/sua/{id}', [
        'as' => 'admin.quanly_companies.sua',
        'uses' => 'AdminQuanlyCompanies@edit'
    ]);

    Route::post('admin/quanly-companies/luu/{id}', [
        'as' => 'admin.quanly_companies.luu',
        'uses' => 'AdminQuanlyCompanies@update'
    ]);

    Route::get('admin/quanly-companies/xoa/{id}', [
        'as' => 'admin.quanly_companies.xoa',
        'uses' => 'AdminQuanlyCompanies@destroy'
    ]);
});
