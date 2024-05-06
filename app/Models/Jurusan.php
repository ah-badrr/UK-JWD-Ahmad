<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusan';
    protected $fillable = [
        'nama',
        'deskripsi'
    ];


    public function peserta(): HasMany
    {
        return $this->hasMany(Peserta::class, 'jurusan_id', 'id');
    }
}
