<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukMasukKeluar extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kelola';
    protected $table = 'produkmasukkeluar';
    protected $guarded = [];
}
