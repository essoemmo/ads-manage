<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $table = 'ads';

    protected $fillable = [
        'category_id',
        'advertiser_id',
        'title',
        'description',
        'type',
        'start_date'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function ads(){
        return $this->belongsToMany(Ad::class,'ad_tags','tag_id','ad_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
