<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    //
    protected $table = 'kampuses';
    //primary key
    protected $primaryKey = 'id';
    //disable create_at and update_at
    public $timestamps = false;
    protected $fillable = [
        'id',
        'Fakultas',
        'Prodi',
        'Bidang_Studi'
    ];
}
