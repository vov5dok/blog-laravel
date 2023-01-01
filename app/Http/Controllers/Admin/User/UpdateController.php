<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\User;

class UpdateController extends BaseController
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ]);

        $user = $this->service->update($data, $user);

        return view('admin.user.show', compact('user'));
    }
}
