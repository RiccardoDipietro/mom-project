<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recensione extends Model
{
    use HasFactory;
    protected $fillable = ['recensione', 'star', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
