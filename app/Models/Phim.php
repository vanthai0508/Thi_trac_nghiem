<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten_phim',
        'gia_tien'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}