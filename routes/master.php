<?php
use Illuminate\Support\Facades\Route;

Route::get('/coba', function () {
    echo "Coba";
});

Route::group(['middleware' => 'auth'], function () {
    
    Route::group(['prefix' => '/master/kategoridok'], function () {
        Route::get('/',             'Master\KategoriDokumenController@index')->middleware('checkAuth:master/kategoridok');
        Route::post('/save',        'Master\KategoriDokumenController@save')->middleware('checkAuth:master/kategoridok');
        Route::post('/update',      'Master\KategoriDokumenController@update')->middleware('checkAuth:master/kategoridok');
        Route::get('/delete/{id}',  'Master\KategoriDokumenController@delete')->middleware('checkAuth:master/kategoridok'); 
        Route::get('/list',         'Master\KategoriDokumenController@listKategoriDokumen')->middleware('checkAuth:master/kategoridok');
    });

    Route::group(['prefix' => '/master/daftardokumen'], function () {
        Route::get('/',             'Master\DaftarDokumenController@index')->middleware('checkAuth:master/daftardokumen');
        Route::post('/save',        'Master\DaftarDokumenController@save')->middleware('checkAuth:master/daftardokumen');
        Route::post('/update',      'Master\DaftarDokumenController@update')->middleware('checkAuth:master/daftardokumen');
        Route::get('/delete/{id}',  'Master\DaftarDokumenController@delete')->middleware('checkAuth:master/daftardokumen'); 
        Route::get('/list',         'Master\DaftarDokumenController@listKategoriDokumen')->middleware('checkAuth:master/daftardokumen');
    });    

    Route::group(['prefix' => '/master/department'], function () {
        Route::get('/',             'Master\DepartmentMasterController@index')->middleware('checkAuth:master/department');
        Route::get('/create',       'Master\DepartmentMasterController@create')->middleware('checkAuth:master/department');
        Route::post('/save',        'Master\DepartmentMasterController@save')->middleware('checkAuth:master/department');
        Route::post('/update',      'Master\DepartmentMasterController@update')->middleware('checkAuth:master/department');
        Route::get('/delete/{id}',  'Master\DepartmentMasterController@delete')->middleware('checkAuth:master/department');  
        Route::get('/deptlists',    'Master\DepartmentMasterController@departmentLists')->middleware('checkAuth:master/department');  
        
    });

    Route::group(['prefix' => '/master/jabatan'], function () {
        Route::get('/',             'Master\JabatanMasterController@index')->middleware('checkAuth:master/jabatan');
        Route::get('/create',       'Master\JabatanMasterController@create')->middleware('checkAuth:master/jabatan');
        Route::post('/save',        'Master\JabatanMasterController@save')->middleware('checkAuth:master/jabatan');
        Route::post('/update',      'Master\JabatanMasterController@update')->middleware('checkAuth:master/jabatan');
        Route::get('/delete/{id}',  'Master\JabatanMasterController@delete')->middleware('checkAuth:master/jabatan');  
        Route::get('/jabatanlist',  'Master\JabatanMasterController@jabatanLists')->middleware('checkAuth:master/jabatan');  
        
    });

    Route::group(['prefix' => '/master/pegawai'], function () {
        Route::get('/',             'Master\PegawaiController@index')->middleware('checkAuth:master/pegawai');
        Route::get('/create',       'Master\PegawaiController@create')->middleware('checkAuth:master/pegawai');
        Route::post('/save',        'Master\PegawaiController@save')->middleware('checkAuth:master/pegawai');
        Route::post('/update',      'Master\PegawaiController@update')->middleware('checkAuth:master/pegawai');
        Route::get('/delete/{id}',  'Master\PegawaiController@delete')->middleware('checkAuth:master/pegawai');  
        Route::get('/listpegawai',  'Master\PegawaiController@listPegawai')->middleware('checkAuth:master/pegawai');  
        
    });

});