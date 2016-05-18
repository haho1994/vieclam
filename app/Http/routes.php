<?php

Route::get('/', function () {
    return view('welcome');
});




Route::get('dangky-vieclam', [
    'as' => 'dangky',
    'uses' => 'TrangchuController@dangKyViecLam'
]);

Route::post('dangky-vieclam', [
    'as' => 'xuly.dangky',
    'uses' => 'TrangchuController@xuLyDangKyViecLam'
]);
 Route::get('/lienhe', [
    'as' => 'lien-he',
    'uses' => 'TrangchuController@LienHe'
]);
 Route::get('/thoathuansudung', [
    'as' => 'thoathuan-sudung',
    'uses' => 'TrangchuController@ThoaThuan'
]);
 Route::get('/quydinh', [
    'as' => 'quydinh-baomat',
    'uses' => 'TrangchuController@QuyDinh'
]);
Route::get('dangky-tuyendung', [
    'as' => 'dangky_tuyendung',
    'uses' => 'TrangchuController@dangKyTuyenDung'
]);

Route::post('dangky-tuyendung', [
    'as' => 'xuly.dangky_tuyendung',
    'uses' => 'TrangchuController@xuLyDangKyTuyenDung'

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
//
//dn user
Route::get('admin', [
    'as' => 'admin',
    'uses' => 'TrangchuController@trangAdmin'
]);
Route::get('dangnhap', [
    'as' => 'dangnhap',
    'uses' => 'TrangchuController@dangNhapTaiKhoan'
]);
Route::post('dangnhap', [
    'as' => 'xuly.dangnhap',
    'uses' => 'TrangchuController@xuLyDangNhap'
]);
Route::post('ngonngu', [
    'as' => 'ngongu',
    'uses' => 'TrangchuController@trangNgonNgu'
]);
Route::post('ngonngu', [
    'as' => 'ngongu',
    'uses' => 'TrangchuController@trangNgonNgu2'
]);



Route::get('/', [
    'as' => 'frontend.search.get',
    'uses' => 'SearchController@index'
]);
Route::get('timkiem', [
    'as' => 'frontend.search.search',
    'uses' => 'SearchController@search'
]);
Route::get('timkiem1', [
    'as' => 'frontend.search.get1',
    'uses' => 'TimKiemController@index'
]);
Route::get('timkiem2', [
    'as' => 'frontend.search.search1',
    'uses' => 'TimKiemController@search'
]);

Route::get('timkiem/congviec/{id}', [
    'as' => 'frontend.congviec.timkiem1',
    'uses' => 'JobSearchController@jobsearch'
]);

Route::get('congviec/{id}', [
    'as' => 'frontend.congviec.timkiem',
    'uses' => 'JobSearchController@jobsearch'
]);

//admin
Route::get('admin/login', [
    'as' => 'admin_login',
    'uses' => 'AdminQuanlyDanhMuc@login'
]);

Route::post('admin/login', [
    'as' => 'admin.login',
    'uses' => 'AdminQuanlyDanhMuc@xuLyLogin'
]);

//doipass
//Route::get('doi-mat-khau',[
//   'as'  => 'doimatkhau',
//    'uses' => 'TrangchuController@doiMatKhau'
//]);
//Route::post('doi-mat-khau',[
//   'as' => 'xuly_doimatkhau',
//    'uses' => 'TrangchuController@xuLyDoiMatKhau'
//]);

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
Route::get('admin/locations/xem/{id}', [
    'as' => 'admin.diadiem.xem',
    'uses' => 'AdminQuanlyDiaDiem@show'
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
Route::get('admin/ngonngu/xem/{id}', [
    'as' => 'admin.quanly-ngonngu.xem',
    'uses' => 'AdminQuanLyNgonNgu@show'
]);


Route::get('password/reset/{token?}', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@showResetForm']);
Route::post('password/email', ['as' => 'auth.password.email', 'uses' => 'Auth\PasswordController@sendResetLinkEmail']);
Route::post('password/reset', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@reset']);

Route::get('/test1', function()
{
    Mail::send('home', ['user' => ''], function ($m)  {
            $m->from('hello@app.com', 'Your Application');

            $m->to('haho906@gmail.com', '$user->name')->subject('Your Reminder!');
        });
});






//Route::post('admin/kynang/luu/{id}', [
//    'as' => 'admin.quanly-kynang.luu',
//    'uses' => 'AdminQuanLyKyNang@update'
//]);
//
//Route::get('admin/kynang/xoa/{id}', [
//    'as' => 'admin.quanly-kynang.xoa',
//    'uses' => 'AdminQuanLyKyNang@destroy'
//]);
//Route::get('admin/kynang/xem/{id}', [
//        'as' => 'admin.quanly-kynang.xem',
//        'uses' => 'AdminQuanLyKyNang@show'
//    ]);







Route::get('/test', function() {
    
    $user = App\User::findOrFail(2);

        Mail::send('welcome', ['user' => $user], function ($m) use ($user) {
            //$m->from('viethung090@gmail.com', 'Your Application');

            $m->to($user->email, $user->full_name)->subject('Your Reminder!');
        });
    
    dd(App\User::class);
});

Route::get('admin/logout', function() {
    Auth::logout();
    return redirect()->route('admin_login');
});

Route::group(['middleware' => 'auth'], function() {
    //nhatuyendung _doimatkhau
    Route::get('nhatuyendung/taikhoan/doimatkhau', [
        'as' => 'nhatuyendung_doimatkhau',
        'uses' => 'TaiKhoanController@tuyendungdoimatkhau'
    ]);
    Route::post('nhatuyendung/taikhoan/doimatkhau', [
        'as' => 'xuly.nhatuyendung_doimatkhau',
        'uses' => 'TaiKhoanController@xuLytuyendungdoimatkhau'
    ]);
    //doimatkhau
    Route::get('taikhoan/doimatkhau', [
        'as' => 'doimatkhau',
        'uses' => 'TaiKhoanController@doiMatKhau'
    ]);
    
    Route::post('taikhoan/doimatkhau',[
       'as' => 'doimatkhau_xuly',
        'uses' => 'TaiKhoanController@xuLyDoiMatKhau'
    ]);

    //suathongtincanhan
    Route::get('taikhoan/capnhapthongtincanhan', [
        'as' => 'taikhoan_suathongtincanhan',
        'uses' => 'TaiKhoanController@suathongtincanhan'
    ]);
    Route::post('taikhoan/capnhapthongtincanhan', [
        'as' => 'xuly.taikhoan_suathongtincanhan',
        'uses' => 'TaiKhoanController@xulysuathongtincanhan'
    ]);
    
    Route::get('taikhoan/xemthongtincanhan', [
        'as' => 'taikhoan_xemthongtincanhan',
        'uses' => 'TaiKhoanController@xemttcn'
    ]);
   //doi email
    Route::get('taikhoan/email', [
        'as' => 'doiEmail',
        'uses' => 'TaiKhoanController@doiEmail'
    ]);
    Route::post('taikhoan/doimatkhau', [
        'as' => 'xuly.email',
        'uses' => 'TaiKhoanController@xulyemail'
    ]);
    
    //timkiemhoso
    Route::get('nhatuyendung/timkiemhoso',[
       'as' => 'timhoso',
        'uses' => 'NhaTuyenDungController@timHoSo'
    ]);
    
    Route::get('nhatuyendung/timkiemhoso/hoso',[
       'as' => 'timhoso_xuly',
        'uses' => 'NhaTuyenDungController@xulytimHoSo'
    ]);
    
    Route::get('nhatuyendung/timkiemhoso/{id}', [
    'as' => 'timhoso_xemchitiet',
    'uses' => 'NhaTuyenDungController@xemchitiet'
    ]);
    
    //dangtintuyendung
    Route::get('nhatuyendung/dangtin', [
        'as' => 'dangtin',
        'uses' => 'NhaTuyenDungController@dangtin'
    ]);

    Route::post('nhatuyendung/dangtin', [
        'as' => 'xuly_dangtin',
        'uses' => 'NhaTuyenDungController@xulydangtin'
    ]);
    
    Route::get('password/reset', array(
        'uses' => 'PasswordController@remind',
        'as' => 'password.remind'
    ));
    Route::post('password/reset', array(
        'uses' => 'PasswordController@request',
        'as' => 'password.request'
    ));
    
    
    Route::get('congviec/luu/{id}', [
    'as' => 'congviec.luu',
    'uses' => 'JobSearchController@savejob'
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

    Route::get('admin/quanly-companies/xem/{id}', [
        'as' => 'admin.quanly_companies.xem',
        'uses' => 'AdminQuanlyCompanies@show'
    ]);

    Route::get('admin/quanly-companies/thoat', [
        'as' => 'admin.quanly_companies.thoat',
        'uses' => 'AdminQuanlyCompanies@thoat'
    ]);

    //hoso
    Route::get('admin/quanly-curriculumvitaes', [
        'as' => 'admin.quanly_curriculumvitaes',
        'uses' => 'AdminQuanlyCurriculumvitaes@index'
    ]);
    Route::get('admin/quanly-curriculumvitaes/them', [
        'as' => 'admin.quanly_curriculumvitaes.them',
        'uses' => 'AdminQuanlyCurriculumvitaes@create'
    ]);

    Route::post('admin/quanly-curriculumvitaes/them', [
        'as' => 'admin.quanly_curriculumvitaes.xuly',
        'uses' => 'AdminQuanlyCurriculumvitaes@store'
    ]);

    Route::get('admin/quanly-curriculumvitaes/sua/{id}', [
        'as' => 'admin.quanly_curriculumvitaes.sua',
        'uses' => 'AdminQuanlyCurriculumvitaes@edit'
    ]);

    Route::post('admin/quanly-curriculumvitaes/luu/{id}', [
        'as' => 'admin.quanly_curriculumvitaes.luu',
        'uses' => 'AdminQuanlyCurriculumvitaes@update'
    ]);

    Route::get('admin/quanly-curriculumvitaes/xoa/{id}', [
        'as' => 'admin.quanly_curriculumvitaes.xoa',
        'uses' => 'AdminQuanlyCurriculumvitaes@destroy'
    ]);

    Route::get('admin/quanly-curriculumvitaes/xem/{id}', [
        'as' => 'admin.quanly_curriculumvitaes.xem',
        'uses' => 'AdminQuanlyCurriculumvitaes@show'
    ]);



    //hoso_ngonngu
//     Route::get('admin/quanly-curriculumvitaes-languages', [
//        'as' => 'admin.quanly_curriculumvitaes_languages',
//        'uses' => 'AdminQuanlyLanguagesCurriculumvitaes@index'
//    ]);
//    Route::get('admin/quanly-curriculumvitaes-languages/them', [
//        'as' => 'admin.quanly_curriculumvitaes_languages.them',
//        'uses' => 'AdminQuanlyLanguagesCurriculumvitaes@create'
//    ]);
//
//    Route::post('admin/quanly-curriculumvitaes-languages/them', [
//        'as' => 'admin.quanly_curriculumvitaes_languages.xuly',
//        'uses' => 'AdminQuanlyLanguagesCurriculumvitaes@store'
//    ]);
//
//    Route::get('admin/quanly-curriculumvitaes-languages/sua/{id}', [
//        'as' => 'admin.quanly_curriculumvitaes_languages.sua',
//        'uses' => 'AdminQuanlyLanguagesCurriculumvitaes@edit'
//    ]);
//
//    Route::post('admin/quanly-curriculumvitaes-languages/luu/{id}', [
//        'as' => 'admin.quanly_curriculumvitaes_languages.luu',
//        'uses' => 'AdminQuanlyLanguagesCurriculumvitaes@update'
//    ]);
//
//    Route::get('admin/quanly-curriculumvitaes-languages/xoa/{id}', [
//        'as' => 'admin.quanly_curriculumvitaes_languages.xoa',
//        'uses' => 'AdminQuanlyLanguagesCurriculumvitaes@destroy'
//    ]);
//    Route::get('admin/quanly-curriculumvitaes-languages/xem/{id}', [
//        'as' => 'admin.quanly_curriculumvitaes_languages.xem',
//        'uses' => 'AdminQuanlyLanguagesCurriculumvitaes@show'
//    ]);
//    
    //job
    Route::get('admin/quanly-jobs', [
        'as' => 'admin.quanly_jobs',
        'uses' => 'AdminQuanlyJobs@index'
    ]);
    Route::get('admin/quanly-jobs/them', [
        'as' => 'admin.quanly_jobs.them',
        'uses' => 'AdminQuanlyJobs@create'
    ]);

    Route::post('admin/quanly-jobs/them', [
        'as' => 'admin.quanly_jobs.xuly',
        'uses' => 'AdminQuanlyJobs@store'
    ]);

    Route::get('admin/quanly-jobs/sua/{id}', [
        'as' => 'admin.quanly_jobs.sua',
        'uses' => 'AdminQuanlyJobs@edit'
    ]);

    Route::post('admin/quanly-jobs/luu/{id}', [
        'as' => 'admin.quanly_jobs.luu',
        'uses' => 'AdminQuanlyJobs@update'
    ]);

    Route::get('admin/quanly-jobs/xoa/{id}', [
        'as' => 'admin.quanly_jobs.xoa',
        'uses' => 'AdminQuanlyJobs@destroy'
    ]);

    Route::get('admin/quanly-jobs/xem/{id}', [
        'as' => 'admin.quanly_jobs.xem',
        'uses' => 'AdminQuanlyJobs@show'
    ]);

    //news
    Route::get('admin/quanly-news', [
        'as' => 'admin.quanly_news',
        'uses' => 'AdminQuanLyNews@index'
    ]);
    Route::get('admin/quanly-news/them', [
        'as' => 'admin.quanly_news.them',
        'uses' => 'AdminQuanLyNews@create'
    ]);

    Route::post('admin/quanly-news/them', [
        'as' => 'admin.quanly_news.xuly',
        'uses' => 'AdminQuanLyNews@store'
    ]);

    Route::get('admin/quanly-news/sua/{id}', [
        'as' => 'admin.quanly_news.sua',
        'uses' => 'AdminQuanLyNews@edit'
    ]);

    Route::post('admin/quanly-news/luu/{id}', [
        'as' => 'admin.quanly_news.luu',
        'uses' => 'AdminQuanLyNews@update'
    ]);

    Route::get('admin/quanly-news/xoa/{id}', [
        'as' => 'admin.quanly_news.xoa',
        'uses' => 'AdminQuanLyNews@destroy'
    ]);

    Route::get('admin/quanly-news/xem/{id}', [
        'as' => 'admin.quanly_news.xem',
        'uses' => 'AdminQuanLyNews@show'
    ]);

    Route::get('admin/quanly-news/thoat', [
        'as' => 'admin.quanly_news.thoat',
        'uses' => 'AdminQuanLyNews@thoat'
    ]);

    //image
//    Route::get('admin/quanly-images', [
//        'as' => 'admin.quanly_images',
//        'uses' => 'AdminQuanLyImage@index'
//    ]);
//    Route::get('admin/quanly-images/them', [
//        'as' => 'admin.quanly_images.them',
//        'uses' => 'AdminQuanLyImage@create'
//    ]);
//
//    Route::post('admin/quanly-images/them', [
//        'as' => 'admin.quanly_images.xuly',
//        'uses' => 'AdminQuanLyImage@store'
//    ]);
//
//    Route::get('admin/quanly-images/sua/{id}', [
//        'as' => 'admin.quanly_images.sua',
//        'uses' => 'AdminQuanLyImage@edit'
//    ]);
//
//    Route::post('admin/quanly-images/luu/{id}', [
//        'as' => 'admin.quanly_images.luu',
//        'uses' => 'AdminQuanLyImage@update'
//    ]);
//
//    Route::get('admin/quanly-images/xoa/{id}', [
//        'as' => 'admin.quanly_images.xoa',
//        'uses' => 'AdminQuanLyImage@destroy'
//    ]);
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
    Route::get('admin/kynang/xem/{id}', [
        'as' => 'admin.quanly-kynang.xem',
        'uses' => 'AdminQuanLyKyNang@show'
    ]);
});


Route::get('/upload-cv', function() {
    return view('admin.upload.index');
});

Route::post('/upload-cv', function() {
    $user = auth()->user();
    $file = request()->file('cv');

    $director = public_path('upload/cv' . '/' . $user->id);
    //move_uploaded_file($file->getPathName(), $director.'/abc.doc');

    File::makeDirectory($director, $mode = 0777, true, true);
    $fileName = gen_uuid();
    $file->move($director, $fileName . '.' . $file->getClientOriginalExtension());

    return view('admin.upload.index');
});

Route::get('tai-cv/{filename}', [
    'as' => 'admin.download.cv',
    'uses' => 'DownloadController@downloadCV'
]);
Route::get('/nopdon', [
    'as' => 'nopdonungtuyen',
    'uses' => 'TrangchuController@nopdon'
]);
//quan ly user
Route::get('admin/quanly-user', [
    'as' => 'admin.quanly_user',
    'uses' => 'AdminQuanLyUser@index'
]);
Route::get('admin/quanly-user/them', [
    'as' => 'admin.quanly_user.them',
    'uses' => 'AdminQuanLyUser@create'
]);

Route::post('admin/quanly-user/them', [
    'as' => 'admin.quanly_user.xuly',
    'uses' => 'AdminQuanLyUser@store'
]);

Route::get('admin/quanly-user/sua/{id}', [
    'as' => 'admin.quanly_user.sua',
    'uses' => 'AdminQuanLyUser@edit'
]);

Route::post('admin/quanly-user/luu/{id}', [
    'as' => 'admin.quanly_user.luu',
    'uses' => 'AdminQuanLyUser@update'
]);

Route::get('admin/quanly-user/xoa/{id}', [
    'as' => 'admin.quanly_user.xoa',
    'uses' => 'AdminQuanLyUser@destroy'
]);
Route::get('admin/quanly-user/xem/{id}', [
    'as' => 'admin.quanly_user.xem',
    'uses' => 'AdminQuanLyUser@show'
]);


//Công việc yêu thích
Route::get('admin/quanly-job-fa', [
    'as' => 'admin.quanly_job',
    'uses' => 'AdminQuanLyCongViecYeuThich@index'
]);
Route::get('admin/quanly-job-fa/them', [
    'as' => 'admin.quanly_job.them',
    'uses' => 'AdminQuanLyCongViecYeuThich@create'
]);

Route::post('admin/quanly-job-fa/them', [
    'as' => 'admin.quanly_job.xuly',
    'uses' => 'AdminQuanLyCongViecYeuThich@store'
]);

Route::get('admin/quanly-job-fa/sua/{id}', [
    'as' => 'admin.quanly_job.sua',
    'uses' => 'AdminQuanLyCongViecYeuThich@edit'
]);

Route::post('admin/quanly-job-fa/luu/{id}', [
    'as' => 'admin.quanly_job.luu',
    'uses' => 'AdminQuanLyCongViecYeuThich@update'
]);

Route::get('admin/quanly-job-fa/xoa/{id}', [
    'as' => 'admin.quanly_job.xoa',
    'uses' => 'AdminQuanLyCongViecYeuThich@destroy'
]);
Route::get('admin/quanly-job-fa/xem/{id}', [
    'as' => 'admin.quanly_job.xem',
    'uses' => 'AdminQuanLyCongViecYeuThich@show'
]);

//report
Route::get('admin/report', [
    'as' => 'admin.quanly-report',
    'uses' => 'AdminQuanLyReport@index'
]);

Route::get('admin/report/them', [
    'as' => 'admin.quanly-report.them',
    'uses' => 'AdminQuanLyReport@create'
]);

Route::post('admin/report/them', [
    'as' => 'admin.quanly-report.xuly',
    'uses' => 'AdminQuanLyReport@store'
]);

Route::get('admin/report/sua/{id}', [
    'as' => 'admin.quanly-report.sua',
    'uses' => 'AdminQuanLyReport@edit'
]);

Route::post('admin/report/luu/{id}', [
    'as' => 'admin.quanly-report.luu',
    'uses' => 'AdminQuanLyReport@update'
]);

Route::get('admin/report/xoa/{id}', [
    'as' => 'admin.quanly-report.xoa',
    'uses' => 'AdminQuanLyReport@destroy'
]);
Route::get('admin/report/xem/{id}', [
    'as' => 'admin.quanly-report.xem',
    'uses' => 'AdminQuanLyReport@show'
]);

Route::get('admin', [
    'as' => 'admin1',
    'uses' => 'TrangchuController@trangAdmin'
]);

Route::auth();

Route::get('/home', 'HomeController@index');
