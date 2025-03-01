<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServerModel1 extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status', 'ip_address'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}