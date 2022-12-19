<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdTag extends Model
{
    use HasFactory;

    protected $table = 'ad_tags';

    protected $fillable = [
        'tag_id',
        'ad_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
