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

/* Route::get('/', function () {
    return view('welcome');
});
*/

/**
 * KETIKA DIJALANKAN AKAN ERROR KARENA CONTROLLER BELUM DIBUAT, 
 * OLEH KARENA ITU MATIKAN `//` (JANGAN DIHAPUS) ROUTE YANG TIDAK DIKERJAKAN
 * =========================================================================
 * CATATAN: 
 * Route:resource() digunakan untuk membuat route CRUD secara otomatis
 * cara membuat controller resource yaitu dengan perintah: 
 * php artisan make:controller NamaController --resource
 * maka secara otomatis akan terbuat method untuk CRUD, 
 * tentunya anda bisa menambahkan method lainnya pada controller tersebut
 */
Auth::routes();

// 1, M Ilvan Baihaqi, 2015150011,1.1 Mitra Kerja
// 2, Wahid Ardianto, 2015150018,1.1.1 Menambah Mitra Kerja
// 3, Afriadi Agung Dwiyono, 2015150019,1.1.2 Menampilkan Detail Mitra Kerja
Route::resource('mitra_kerja', 'MitraKerjaController');

// 4, Muhamad Masykur Niam, 2015150025,1.2 Surat Permintaan Pembelian (SPP)
// 5, Faisal Hafiz Varian, 2015150026,1.2.1 Menambah Surat Permintaan Pembelian (SPP)
// 6, Suryo Adi Saputro, 2015150033,1.2.2 Menampilkan Detail Surat Permintaan Pembelian (SPP)
Route::resource('spp', 'SppController');

// 7, Fatkhurrohman, 2015150036,1.2.5 Mencetak Surat Permintaan Pembelian (SPP)
Route::get('spp/{id}/cetak', 'SppController@cetak')->name('cetak.spp');

// 8, Achmad Muhajirin, 2015150037,1.3 Persetujuan SPP
Route::get('spp/approval', 'SppController@approval')->name('approval.spp');

// 9, Faik Sarifudin, 2015150038,1.4 Order Pembelian

// 10, Muhammad Anis Fuadi, 2015150044,1.4.1 Menambah Order Pembelian
// 11, Muhamad Anggun Suhada, 2015150049,1.4.2 Menampilkan Detail Order Pembelian
Route::resource('order_pembelian', 'OrderPembelianController');

// 12, Muhammad Askal Aziz, 2015150050,1.4.4 Mencetak Order Pembelian
Route::get('order_pembelian/{id}/cetak', 'OrderPembelianController@cetak')->name('cetak.orderpembelian');

// 13, Sandra Puji Lestari, 2015150052,1.5 Penerimaan Barang
// 14, Zaenal Abidin, 2015150054,1.5.1 Menambah Laporan Penerimaan Barang
// 15, Muhammad Faradhika Prabayu, 2015150058,1.5.2 Menampilkan Detail Penerimaan Barang
Route::resource('penerimaan_barang', 'PenerimaanBarangController');

// 16, Altan Asea Habie, 2015150059,1.5.5 Mencetak Penerimaan Barang
Route::get('penerimaan_barang/{id}/cetak', 'PenerimaanBarangController@cetak')->name('cetak.penerimaanbarang');

// 17, Iqbal Shobirin, 2015150066,1.6 Buku Pembantu Stok
Route::get('pembantu_stok/', 'PembantuStokController@index')->name('index.pembantustok');

// 18, Yulian Kurnia Putra, 2015150074,1.6.2 Mencetak Laporan Daftar Stok
Route::get('pembantu_stok/cetak', 'PembantuStokController@cetak')->name('cetak.pembantustok');

// 19, Evan Candra Aditya, 2015150075,1.7 Pemakaian Barang
Route::get('pemakaian_barang', 'PemakaianBarangController@index')->name('index.pemakaianbarang');

// 20, Kus Catur Riona, 2015150079,1.7.1 Menambah Laporan Pemakaian Barang
Route::get('pemakaian_barang/create', 'PemakaianBarangController@create')->name('create.pemakaianbarang');

// 21, Aly Sofyan, 2015150080,1.7.2 Menampilkan Detail Pemakaian Barang
Route::get('pemakaian_barang/{id}/show', 'PemakaianBarangController@show')->name('show.pemakaianbarang');

// 22, Rahman Hidayat, 2015150083,1.7.3 Mencetak Pemakaian Barang
Route::get('pemakaian_barang/{id}/cetak', 'PemakaianBarangController@cetak')->name('cetak.pemakaianbarang');

// 23, Ikhsan Andriyawan, 2015150086,1.8 Pembayaran Hutang
Route::get('pembayaran_hutang', 'PembayaranHutangController@index')->name('index.pembayaranhutang');

// 24, Laelina Dwi Agustin, 2015150089,1.8.1 Menambah Pembayaran Hutang
Route::get('pembayaran_hutang/create', 'PembayaranHutangController@create')->name('create.pembayaranhutang');

// 25, Andika Dwi Kurniawan, 2015150092,1.8.3 Mencetak Pembayaran Hutang
Route::get('pembayaran_hutang/{id}/cetak', 'PembayaranHutangController@cetak')->name('cetak.pembayaranhutang');

// 26, Isma Amalia Rahma, 2015150093,1.9 Buku Pembantu Hutang
Route::get('pembantu_hutang', 'PembantuHutangController@index')->name('index.pembantuhutang');

// 27, Siti Nur Halimatus Sya'diyah, 2015150094,1.9.1 Mencari Laporan Daftar Hutang
Route::get('pembantu_hutang/{id}/show', 'PembantuHutangController@show')->name('show.pembantuhutang');

// 28, Lyi Fahmi Yuniati Zahroh, 2015150095,1.9.2 Mencetak Laporan Daftar Hutang
Route::get('pembantu_hutang/cetak', 'PembantuHutangController@cetak')->name('cetak.pembantuhutang');

// 29, Akhmad Rozak Jari, 2015150096,1.10 Aging Hutang
Route::get('aging_hutang', 'AgingHutangController@index')->name('index.aginghutang');

// 30, Muhammad Aeron Randi, 2015150107,1.10.1 Mencari Aging Hutang
Route::get('aging_hutang/{id}/show', 'AgingHutangController@show')->name('show.aginghutang');

// 31, Fuat Hasan, 2015150109,1.10.2 Mencetak Aging Hutang
Route::get('aging_hutang/{id}/cetak', 'AgingHutangController@cetak')->name('cetak.aginghutang');

// 32, Dyno Chosha Putro, 2015150113,1.11 Buku Pembantu Pembayaran Hutang
Route::get('pembantu_bayar_hutang', 'PembantuBayarHutangController@index')->name('index.pembantubayarhutang');

// 33, Aminah, 2015150115,1.11.2 Mencetak Laporan Transaksi APP
Route::get('pembantu_bayar_hutang/cetak', 'PembantuBayarHutangController@cetak')->name('cetak.pembantubayarhutang');

// 34, Muhamad Ahadi, 2015150116,2.1 Pelanggan
// 35, Febri Irvan Faizin, 2015150118,2.1.1 Menambah Pelanggan
// 36, Anisatun Latifah, 2015150121,2.1.2 Menampilkan Detail Pelanggan
Route::resource('pelanggan', 'PelangganController');

// 37, Jomi Eka Satria, 2015150124,2.2 Piutang
// 38, Khafiska Khoerunnisak, 2015150125,2.2.1 Menambah Piutang
Route::resource('piutang', 'PiutangController');

// 39, Ahmad Fakih Nugroho, 2015150127,2.2.4 Mencetak Piutang
Route::get('piutang/{id}/cetak', 'PiutangController@cetak')->name('cetak.piutang');

// 40, Muhamad Nasrudin, 2016150109,2.3 Penagihan Piutang
Route::get('penagihan_piutang', 'PenagihanPiutangController@index')->name('index.penagihanpiutang');