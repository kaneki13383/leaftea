<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        DB::table('comment')->create()
    }
}
