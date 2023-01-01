<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class EditController extends BaseController
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(User $user)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.user.edit', compact('user', 'categories', 'tags'));
    }
}
