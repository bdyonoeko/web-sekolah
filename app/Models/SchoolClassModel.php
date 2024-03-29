<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClassModel extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    protected $table = 'classes';

    public function users () {
        return $this->hasMany(User::class, 'class_id', 'id');
    }
}
