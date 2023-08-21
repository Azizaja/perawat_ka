<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_kategori_checksheet extends Model
{
    use HasFactory;
    protected $table = 'sub_kategori_checksheet';
    protected $fillable = [
        'id_kategori_checksheet',
        'nama'
    ];
}
