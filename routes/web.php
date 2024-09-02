<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function  () {
    $html = "
        <h1>Aplikasi Kontak Programming Web</h1>
        <div>
            <a href='/contacts'>Kontak</a>
            <a href='/contacts/create'>Kontak Baru</a>
            <a href='/contacts/2'>Tampilkan Kontak</a>
            <a href='/students/Pratama Putra'>Tampilan Nama</a>
        </div>
    ";
    return $html;
});

    Route::get('/contacts', function() {
        return "<h1><marquee direction= 'right'>Kontak studentday programming<marquee><h1>";
    });
    Route::get('/contacts/create', function() {
        return "<h1>Tambah Kontak Baru<h1>";
    });
    Route::get('/contacts/{id}', function($id) {
        return "Halaman Kontak Dengan ID ".$id;
    });
    Route::get('/students/{name}', function($name=null) {
            return "Nama Lengkap : ".$name;
    });
    Route::get('/companies/{name?}', function($name=null) {
        if($name) {
            return "Nama Perusahaan: " . $name;
        } else {
            return "Nama Perusahaan Kosong";
        }
     });
     Route::get('/admin/contacts', function() {
        return "<h1>Daftar Kontak</h1>";
     })->name('contacts.index');