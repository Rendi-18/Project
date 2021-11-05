<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function funiture()
    {
        return $this->hasMany(Funiture::class, 'jenis_id');
    }
}
