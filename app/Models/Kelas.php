<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = ['nama'];

    public function students()
    {
        return $this->hasMany(Siswa::class, 'id_kelas');
    }

    public function schedule()
    {
        return $this->hasMany(Jadwal::class, 'id_kelas');
    }
}
