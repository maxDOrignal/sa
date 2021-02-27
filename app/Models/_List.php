<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _List extends Model
{
    use HasFactory;

    protected $table = '_lists';

    protected $fillable = [
        'id',
        'content',
        'task_complete',
        'deleted',
        'created_at',
    ];

    public $timestamps = false;


}
