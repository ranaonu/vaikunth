<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourInclusions extends Model
{
    use HasFactory;
    protected $table = 'tour_inclusions';
    protected $fillable = ['package_id','title'];
}
