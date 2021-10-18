<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surah extends Model
{
    use HasFactory;

    public function ayat()
    {
        return $this->hasMany(Ayat::class);
    }
    // public function scopePublished($query)
    // {
    //     return $query->whereNotNull($query->qualifyColumn('updated_at'));
    // }
}
