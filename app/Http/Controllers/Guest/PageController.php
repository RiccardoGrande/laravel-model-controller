<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $table = 'movies';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [ `title`, `original_title`, `nationality`, `date`, `vote`];
    public $timestamps = false;
}
