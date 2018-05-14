<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Nama tabel
    protected $table = 'posts';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true; //false jika waktu post mutlak tidak bisa di edit

    public function user(){
        return $this->belongsTo('App\User');
    }
}