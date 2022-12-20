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

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'ad_tags','ad_id','tag_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function scopeFilter($query,$filters,$relation)
    {
        foreach ($filters as $filterKey => $filterValue){
            if($filterKey == 'category_id')
                $query->where($filterKey,$filterValue);
            else
                $query->whereRelation($relation,$filterKey,$filterValue);
        }
        return $query;
    }
}
