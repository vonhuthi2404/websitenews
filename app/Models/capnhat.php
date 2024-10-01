<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class capnhat extends Model
{
    use HasFactory;
    protected $table = 'loaitin';
    protected $primaryKey = 'id';
    protected $fillable =[
        'lang',
        'ten',
        'anHien',
        'created_at',
        'updated_at',
    ];
    public function tintuc(){
        return $this->hasMayny('App\Models\tintuc', 'idLT');
    }

}
