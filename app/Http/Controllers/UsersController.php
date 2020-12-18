<?php
/*
 * @Description:
 * @Version: 2.0
 * @Autor: Oyxiaoxi
 * @Date: 2020-12-18 11:09:32
 * @LastEditors: Oyxiaoxi
 * @LastEditTime: 2020-12-18 11:09:59
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }
}
