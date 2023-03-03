<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag::firstOrCreate($data);
        return redirect()->route('admin.tag.index');
    }
}
