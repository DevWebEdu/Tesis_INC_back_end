<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencias extends Model
{
    use HasFactory;
    protected $table = 'incs';
    public $incrementing = false;
    
    public function user()
    {
        return  $this->belongsTo(User::class,'users_id');
    }

    public function app()
    {
        return  $this->belongsTo(Apps::class,'apps_id' );
    }
}
