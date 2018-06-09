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
<<<<<<< HEAD
 */

/**
 * KETIKA DIJALANKAN AKAN ERROR KARENA CONTROLLER BELUM DIBUAT, 
 * OLEH KARENA ITU MATIKAN `//` (JANGAN DIHAPUS) ROUTE YANG TIDAK DIKERJAKAN
 */
=======
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
/**
 * IqbalShobirin.
 * 2015150066
 */
Route::resource('buku-pembantu-stok', 'BpsController');
Route::get('/mahasiswa','MahasiswaController@index')->name('mahasiswa');
=======
<<<<<<< HEAD
=======
>>>>>>> 791636a6da7eff654ad877289b22430c48dfa560

<<<<<<< HEAD
>>>>>>> 767436da8774162d16b96ac2fc9dfe20b244a5a0

=======
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/mahasiswa', 'MahasiswaController@index' )->name ('mahasiswa');
=======
>>>>>>> e97ebe228fa8ec8b7b8aa7cf40913bc46db8def3
>>>>>>> e0c37e699f92790e3f55ea5f7078828344a78d91
=======
<<<<<<< HEAD
>>>>>>> 791636a6da7eff654ad877289b22430c48dfa560
Auth::routes();

// 1, M Ilvan Baihaqi, 2015150011,1.1 Mitra Kerja
Route::get('/mitra_kerja', 'MitraKerjaController@index')->name('mitra kerja');

<<<<<<< HEAD
// 2, Wahid Ardianto, 2015150018,1.1.1 Menambah Mitra Kerja
// 3, Afriadi Agung Dwiyono, 2015150019,1.1.2 Menampilkan Detail Mitra Kerja
// 4, Muhamad Masykur Niam, 2015150025,1.2 Surat Permintaan Pembelian (SPP)
// 5, Faisal Hafiz Varian, 2015150026,1.2.1 Menambah Surat Permintaan Pembelian (SPP)
// 6, Suryo Adi Saputro, 2015150033,1.2.2 Menampilkan Detail Surat Permintaan Pembelian (SPP)
// 7, Fatkhurrohman, 2015150036,1.2.5 Mencetak Surat Permintaan Pembelian (SPP)
// 8, Achmad Muhajirin, 2015150037,1.3 Persetujuan SPP
// 9, Faik Sarifudin, 2015150038,1.4 Order Pembelian
// 10, Muhammad Anis Fuadi, 2015150044,1.4.1 Menambah Order Pembelian
// 11, Muhamad Anggun Suhada, 2015150049,1.4.2 Menampilkan Detail Order Pembelian
// 12, Muhammad Askal Aziz, 2015150050,1.4.4 Mencetak Order Pembelian
// 13, Sandra Puji Lestari, 2015150052,1.5 Penerimaan Barang
// 14, Zaenal Abidin, 2015150054,1.5.1 Menambah Laporan Penerimaan Barang
// 15, Muhammad Faradhika Prabayu, 2015150058,1.5.2 Menampilkan Detail Penerimaan Barang
// 16, Altan Asea Habie, 2015150059,1.5.5 Mencetak Penerimaan Barang
// 17, Iqbal Shobirin, 2015150066,1.6 Buku Pembantu Stok
// 18, Yulian Kurnia Putra, 2015150074,1.6.2 Mencetak Laporan Daftar Stok
// 19, Evan Candra Aditya, 2015150075,1.7 Pemakaian Barang
// 20, Kus Catur Riona, 2015150079,1.7.1 Menambah Laporan Pemakaian Barang
// 21, Aly Sofyan, 2015150080,1.7.2 Menampilkan Detail Pemakaian Barang
// 22, Rahman Hidayat, 2015150083,1.7.3 Mencetak Pemakaian Barang
// 23, Ikhsan Andriyawan, 2015150086,1.8 Pembayaran Hutang
// 24, Laelina Dwi Agustin, 2015150089,1.8.1 Menambah Pembayaran Hutang
// 25, Andika Dwi Kurniawan, 2015150092,1.8.3 Mencetak Pembayaran Hutang
// 26, Isma Amalia Rahma, 2015150093,1.9 Buku Pembantu Hutang
// 27, Siti Nur Halimatus Sya'diyah, 2015150094,1.9.1 Mencari Laporan Daftar Hutang
// 28, Lyi Fahmi Yuniati Zahroh, 2015150095,1.9.2 Mencetak Laporan Daftar Hutang
// 29, Akhmad Rozak Jari, 2015150096,1.10 Aging Hutang
// 30, Muhammad Aeron Randi, 2015150107,1.10.1 Mencari Aging Hutang
// 31, Fuat Hasan, 2015150109,1.10.2 Mencetak Aging Hutang
// 32, Dyno Chosha Putro, 2015150113,1.11 Buku Pembantu Pembayaran Hutang
// 33, Aminah, 2015150115,1.11.2 Mencetak Laporan Transaksi APP
// 34, Muhamad Ahadi, 2015150116,2.1 Pelanggan
// 35, Febri Irvan Faizin, 2015150118,2.1.1 Menambah Pelanggan
// 36, Anisatun Latifah, 2015150121,2.1.2 Menampilkan Detail Pelanggan
// 37, Jomi Eka Satria, 2015150124,2.2 Piutang
// 38, Khafiska Khoerunnisak, 2015150125,2.2.1 Menambah Piutang
// 39, Ahmad Fakih Nugroho, 2015150127,2.2.4 Mencetak Piutang
// 40, Muhamad Nasrudin, 2016150109,2.3 Penagihan Piutang
=======
Auth::routes();

<<<<<<< HEAD

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD

Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');

=======
=======
>>>>>>> 7bd1b8541fc7737ead37155eca430eb70e2e350a
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
<<<<<<< HEAD
 
=======
>>>>>>> e97ebe228fa8ec8b7b8aa7cf40913bc46db8def3
>>>>>>> 7bd1b8541fc7737ead37155eca430eb70e2e350a
<<<<<<< HEAD
>>>>>>> 3478376f421014261027730e029fbcad3b8de29e
=======
>>>>>>> 791636a6da7eff654ad877289b22430c48dfa560
>>>>>>> 52f8885ce33c4996eaefc605f0be0c036c2cbd85
>>>>>>> 767436da8774162d16b96ac2fc9dfe20b244a5a0
