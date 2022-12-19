<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AddTagRequest;
use App\Http\Requests\Api\DeleteTagRequest;
use App\Http\Requests\Api\UpdateTagRequest;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use App\Traits\ResponseTrait;

class TagController extends Controller
{
    use ResponseTrait;

    public function tags()
    {
        $tags = Tag::all();
        return self::successResponse(data:TagResource::collection($tags));
    }

    public function addTag(AddTagRequest $request)
    {
        $tags = Tag::create($request->validated());
        return self::successResponse(message:__('added successfully'));
    }

    public function updateTag(Tag $tag,UpdateTagRequest $request)
    {
        $tag->update($request->validated());
        return self::successResponse(message:__('updated successfully'));
    }

    public function deleteTag(Tag $tag)
    {
        $tag->delete();
        return self::successResponse(message:__('deleted successfully'));
    }

}
