<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourExclusions extends Model
{
    use HasFactory;
    protected $table = 'tour_exclusions';
    protected $fillable = ['package_id','title'];
}
