<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments, App\Products;
use PhpParser\Comment;
use Redirect;
use Illuminate\Support\Facades\Validator;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        Comments::create($request->all());
        flash('Your Comments Successfully Added', 'success');
        return redirect()->back();
    }
}
