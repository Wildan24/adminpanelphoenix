<?php
use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', 'HomeController@index')->name('dashboard');


//---------- Product Controller Admin Master ----------//
Route::get('/ProductShow', 'ProductController@index')->name('productmaster.show');

Route::get('/product/data', 'ProductController@productDataMaster')->name('productmaster.data');

Route::get('/product/status/{status}','ProductController@status')->name('productmaster.status');

Route::get('/delete/{productID}', 'ProductController@Delete');

// Route::post('/ProductUpdate', 'ProductController@ProductUpdate');

// Route::get('/DetailProduct/{id_product}','ProductController@DetailProduct')->name('DetailProduct');

// Route::get('DetailProduct/{id_product}', function ($id_product) {
//     return view('Product.EditProduct', $id_product)->render();
// });

Route::get('/product/view/{view}','ProductController@view')->name('productmaster.view');

//---------- Users Controller Admin Master ----------//
Route::get('/UserShow', 'UserController@index')->name('users.show');

Route::get('/users/data', 'UserController@UsersDataMaster')->name('users.data');



//---------- Voucher Controller Admin Master ----------//
Route::get('/VoucherShow', 'VoucherController@index')->name('voucher.show');

Route::get('/Voucher/data', 'VoucherController@VoucherDataMaster')->name('voucher.data');

Route::get('/Voucher/status/{status}','VoucherController@status')->name('voucher.status');

Route::get('/VoucherShowNonActive', 'VoucherController@IndexNonActive')->name('voucher.shownonactive');

Route::get('/VoucherNonActive', 'VoucherController@NonActiveVoucherMaster')->name('voucher.nonactive');

Route::post('/VoucherAdd', 'VoucherController@VoucherAdd')->name('voucher_add');

Route::get('/VoucherAddView',function(){
    return view("AdminMaster.VoucherAdd");
});

Route::get('/deletevcr/{voucherID}', 'VoucherController@VcrDelete')->name('voucher.softdelete');

Route::get('/restore/{voucherID}', 'VoucherController@RestoreVoucher')->name('voucher.restore');

Route::get('/deletepermanent/{voucherID}','VoucherController@DeletePermanent')->name('voucher.deletepermanent');

Route::get('/voucher/{voucherID}/edit','VoucherController@EditVoucher')->name('voucher.edit');

Route::post('/voucher/{voucherID}/update','VoucherController@UpdateVoucher')->name('voucher.update');



//---------- Advertisment Controller Admin Master ----------//
Route::get('/AdvertShow', 'AdvertiseController@index')->name('advertise.show');

Route::get('/Advertisment/data', 'AdvertiseController@AdvertMaster')->name('advertise.showdata');

// Route::post('/AdvertiseAdd', 'AdvertiseController@AdvertiseAdd')->name('Advertise_add');
Route::get('/AdvertiseAddView',function(){
    return view("AdminMaster.AdvertiseAdd");
});

Route::get('/AdvertiseShowNonActive', 'AdvertiseController@ShowNonActive')->name('advertise.shownonactive');

Route::get('/AdvertiseNonActive', 'AdvertiseController@NonActiveAdvertiseMaster')->name('advertise.nonactive');

Route::get('/Delete/Ads/{advertiseID}','AdvertiseController@AdsDeleteSoft')->name('advertise.softdelete');

Route::get('/restore/Adv/{advertiseID}', 'AdvertiseController@RestoreAdvertise')->name('advertise.restore');

Route::post('/Advertisment/{advertiseID}/update', 'AdvertiseController@UpdateAdvertise')->name('advertise.update');

Route::get('/advertisment/{advertiseID}/edit','AdvertiseController@EdtAdvertise')->name('advertise.edit');

Route::get('/adv/deletepermanent/{advertiseID}','AdvertiseController@PermanentAdv')->name('advertise.deletepermanent');

Route::get('/Advertisment/status/{status}','AdvertiseController@status')->name('advertise.status');



//---------- transaction Controller Admin Master ----------//
Route::get('/Sell/show', 'PenjualanController@index')->name('penjualan.show');

Route::get('/Sell/data', 'PenjualanController@PenjualanDataMaster')->name('penjualan.data');

Route::get('/Sell/{id}/detail', 'PenjualanController@detail')->name('penjualan.detail');

Route::get('/Selltrash', 'PenjualanController@trash')->name('penjualan.trash');

Route::get('/Delete/sell/{id}','PenjualanController@TransDeleteSoft')->name('penjualan.soft');

Route::get('/restore/sell/{id}', 'PenjualanController@RestoreSell')->name('penjualan.restore');