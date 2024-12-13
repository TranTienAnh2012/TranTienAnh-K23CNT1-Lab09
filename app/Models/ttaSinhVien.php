<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ttaSinhVien extends Model
{
    use HasFactory;
    protected $table = 'ttasinhvien';
    public $timestamps = false; // Vô hiệu hóa timestamps

}
