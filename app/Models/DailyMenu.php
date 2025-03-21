<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyMenu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $primaryKey = 'id';
    public $timestamps  = true;
    protected $fillable = ['name', 'description', 'price'];
}
