<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MasterController@index');
Route::get('/jurusan/tkj', 'MasterController@tkj');
Route::get('/jurusan/perbankan', 'MasterController@perbankan');
Route::get('/jurusan/multimedia', 'MasterController@multimedia');

Route::get('/jurusan/{id}' , 'MasterController@jurusan');

Route::get('/alumni', 'MasterController@alumni');

Route::get('/gallery', 'MasterController@gallery');
Route::get('/gallery/{id_album}', 'MasterController@gallery2');






/*admin*/

Route::get('/admin', 'AdminController@coba');

Route::get('/admin/halaman-depan/slidebar', 'AdminController@slidebar');
Route::get('/admin/halaman-depan/data-slidebar', 'AdminController@slidebar2');
Route::get('/admin/slider/del/{id}', 'AdminController@slider_del')->name('del_slider');
Route::post('/admin/slider/proses', 'AdminController@slider_up')->name('up_slider');

Route::get('/admin/jurusan', 'AdminController@jurusan');
Route::post('/admin/jurusan', 'AdminController@jurusan_up')->name('up_jurusan');


Route::get('/admin/halaman-depan/kata-sambutan', 'AdminController@katasambutan');
Route::post('/admin/kata-depan/proses', 'AdminController@kata_up')->name('up_kata');

Route::get('/admin/halaman-depan/keunggulan', 'AdminController@keunggulan');
Route::get('/admin/halaman-depan/data-keunggulan', 'AdminController@keunggulan2');
Route::post('/admin/keunggulan/proses', 'AdminController@keunggulan_up')->name('up_keunggulan');

Route::get('/admin/halaman-depan/kepala', 'AdminController@kepala');
Route::post('/admin/kepala/proses', 'AdminController@kepala_up2')->name('up_kepala');

/*Route::get('/admin/gallery/{id}', 'AdminController@gallery_edit');*/
Route::post('/admin/gallery/{id}/p', 'AdminController@gallery_up2')->name('edit_gambar');
Route::get('/admin/gallery/del2/{id}', 'AdminController@gallery_del2');

Route::get('/admin/gallery', 'AdminController@gallery');
Route::get('/admin/gallery-foto', 'AdminController@gallery_foto');
Route::get('/admin/gallery-foto-data', 'AdminController@gallery_datafoto');
Route::get('/admin/gallery/{id}', 'AdminController@gallery_edit2');
Route::post('/admin/gallery/{id}/proses', 'AdminController@gallery_editpros')->name('edit_gambar');
Route::post('/admin/gallery/proses', 'AdminController@gallery_up')->name('up_gallery');

/*alumni*/
Route::get('/admin/alumni', 'AdminController@alumni');
Route::get('/admin/data-alumni', 'AdminController@alumni2');
Route::post('/admin/alumni/proses', 'AdminController@alumni_proses')->name('up_alumni');
Route::get('/admin/alumni/del/{id}', 'AdminController@alumni_del')->name('del_alumni');



Route::get('/ppdb', 'AdminController@ppdb');
Route::get('/admin/berita', 'AdminController@berita_add2')->name('berita_add');
Route::get('/admin/data-berita', 'AdminController@berita_controller2')->name('berita_add');

Route::get('/admin/berita/add', 'AdminController@berita_add')->name('berita_add');
Route::post('/admin/berita/store', 'AdminController@berita_store')->name('berita_store');
Route::get('/admin/berita/controller', 'AdminController@berita_controller')->name('berita_controller');
Route::post('/admin/berita/del', 'AdminController@berita_del')->name('berita_del');
Route::get('/admin/berita/edit/{id}', 'AdminController@berita_edit')->name('berita_edit');
Route::post('/admin/berita/update', 'AdminController@berita_update')->name('berita_update');
Route::get('/admin/berita/search', 'AdminController@berita_search')->name('berita_search');

//cke
Route::post('upload_image','AdminController@berita_upimage')->name('berita_upimage');
