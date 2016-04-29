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


//admin
Route::get('admin', [
    'as' => 'admin',
    'uses' => 'TrangchuController@admin'
]);


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
//location
Route::get('admin/locations', [
    'as' => 'admin.diadiem',
    'uses' => 'AdminQuanlyDiaDiem@index'
]);
Route::get('admin/locations/them', [
    'as' => 'admin.diadiem.them',
    'uses' => 'AdminQuanlyDiaDiem@create'
]);

Route::post('admin/locations/them', [
    'as' => 'admin.diadiem.xuly',
    'uses' => 'AdminQuanlyDiaDiem@store'
]);

Route::get('admin/locations/sua/{id}', [
    'as' => 'admin.diadiem.sua',
    'uses' => 'AdminQuanlyDiaDiem@edit'
]);

Route::post('admin/locations/luu/{id}', [
    'as' => 'admin.diadiem.luu',
    'uses' => 'AdminQuanlyDiaDiem@update'
]);

Route::get('admin/locations/xoa/{id}', [
    'as' => 'admin.diadiem.xoa',
    'uses' => 'AdminQuanlyDiaDiem@destroy'
]);



//ngon ngu



Route::get('admin/ngonngu', [
    'as' => 'admin.quanly-ngonngu',
    'uses' => 'AdminQuanLyNgonNgu@index'
]);
Route::get('admin/ngonngu/them', [
    'as' => 'admin.quanly-ngonngu.them',
    'uses' => 'AdminQuanLyNgonNgu@create'
]);

Route::post('admin/ngonngu/them', [
    'as' => 'admin.quanly-ngonngu.xuly',
    'uses' => 'AdminQuanLyNgonNgu@store'
]);

Route::get('admin/ngonngu/sua/{id}', [
    'as' => 'admin.quanly-ngonngu.sua',
    'uses' => 'AdminQuanLyNgonNgu@edit'
]);

Route::post('admin/ngonngu/luu/{id}', [
    'as' => 'admin.quanly-ngonngu.luu',
    'uses' => 'AdminQuanLyNgonNgu@update'
]);

Route::get('admin/ngonngu/xoa/{id}', [
    'as' => 'admin.quanly-ngonngu.xoa',
    'uses' => 'AdminQuanLyNgonNgu@destroy'
]);



//skills


Route::get('admin/kynang', [
    'as' => 'admin.quanly-kynang',
    'uses' => 'AdminQuanLyKyNang@index'
]);
Route::get('admin/kynang/them', [
    'as' => 'admin.quanly-kynang.them',
    'uses' => 'AdminQuanLyKyNang@create'
]);

Route::post('admin/kynang/them', [
    'as' => 'admin.quanly-kynang.xuly',
    'uses' => 'AdminQuanLyKyNang@store'
]);

Route::get('admin/kynang/sua/{id}', [
    'as' => 'admin.quanly-kynang.sua',
    'uses' => 'AdminQuanLyKyNang@edit'
]);

Route::post('admin/kynang/luu/{id}', [
    'as' => 'admin.quanly-kynang.luu',
    'uses' => 'AdminQuanLyKyNang@update'
]);

Route::get('admin/kynang/xoa/{id}', [
    'as' => 'admin.quanly-kynang.xoa',
    'uses' => 'AdminQuanLyKyNang@destroy'
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
