<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';

    protected $fillable = [
        'nik',
        'name',
        'unit_id',
        'position_name',
        'date_of_birth',
        'place_of_birth',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];

    protected $unitIdKey = 'unit_id';

    public function has_unit_kerja(){
        return $this->hasOne(UnitKerja::class, 'id', $this->unitIdKey);
    }
}
