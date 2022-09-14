<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'nim',
        'nama',
        'kelamin',
        'tgl_lahir',
        'fas_foto',
        'alamat',
        'tlp',
        'email',
        'github',
        'prodi',
        'angkatan',
        'status_agt'
    ];
}
