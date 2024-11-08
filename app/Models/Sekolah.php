<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sekolah extends Model
{
    use HasFactory;

    protected $table = "_sekolah";
    protected $primaryKey = "sekolah_id";
    protected $guarded = ['sekolah_id'];

    public function user(): HasOne {
        return $this->hasOne(User::class,'sekolah_id','id');
    }
}
