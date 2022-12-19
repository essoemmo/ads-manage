<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AddCategoryRequest;
use App\Http\Requests\Api\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ResponseTrait;

    public function categories()
    {
        $categories = Category::all();
        return self::successResponse(data:CategoryResource::collection($categories));
    }

    public function addCategory(AddCategoryRequest $request)
    {
        $category = Category::create($request->validated());
        return self::successResponse(message:__('added successfully'));
    }

    public function updateCategory(Category $category,UpdateCategoryRequest $request)
    {
        $category->update($request->validated());
        return self::successResponse(message:__('updated successfully'));
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();
        return self::successResponse(message:__('deleted successfully'));
    }
}
