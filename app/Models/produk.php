<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    public $timestamps = true;
    protected $table = 'produk';
    protected $guarded = ['id'];

    protected $fillable = [
        'kategori_id',
        'user_id',
        'status',
        'nm_produk',
        'detail',
        'harga',
        'stok',
        'berat',
        'foto',
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }
}
