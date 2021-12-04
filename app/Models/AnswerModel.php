<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerModel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'answer';

    public function user () {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function kelas () {
        return $this->belongsTo(SchoolClassModel::class, 'class_id', 'id');
    }

}
