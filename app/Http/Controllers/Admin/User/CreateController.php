<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class CreateController extends BaseController
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.user.create', compact('categories', 'tags'));
    }
}
