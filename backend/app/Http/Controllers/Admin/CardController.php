<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: godtoy
 * Date: 2018/11/14
 * Time: 11:40
 */
class CardController extends Controller
{

    public function index()
    {
        return Db::table("cards")->select();
    }
}
