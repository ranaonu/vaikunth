<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    protected $table = 'packages';
    protected $fillable = ['package_category','title','location','days','nights','description','title_image','overview_image','day_heading','day_description'];


    public function tourInclusion()
    {
       return $this->hasMany('App\Models\TourInclusions','package_id');   
    }

    public function tourExclusion()
    {
       return $this->hasMany('App\Models\TourExclusions','package_id');   
    }

    public function packageCategory()
    {
       return $this->belongsTo('App\Models\Category','package_category');   
    }

}
