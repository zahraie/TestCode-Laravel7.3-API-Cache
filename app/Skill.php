<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Skill extends Model
{
    use SoftDeletes;

    protected $table = 'skills';
    protected $fillable = [
        'title',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
