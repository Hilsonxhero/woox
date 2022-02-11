<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\MediaFileService;
use Illuminate\Http\Request;


class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('panel.categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('panel.categories.create', compact('categories'));
    }

    public function store(CategoryRequest $request)

    {
        if ($request->file('thumb')) $request->merge(['media_id' => MediaFileService::publicUpload($request->file('thumb'))->id]);

        $item =  Category::create([
            'title' => $request->title,
            'link' => $request->link,
            'description' => $request->description,
            'parent_id' => $request->parent_id,
            'media_id' => $request->media_id,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'عملیات ایجاد با موفقیت انجام شد');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

        $categories = Category::select('id', 'title')->get();

        $category = Category::query()->where('id', $id)->first();

        return view('panel.categories.edit', compact('categories', 'category'));
    }

    public function update(CategoryRequest $request, $id)
    {

        $category = Category::query()->where('id', $id)->first();

        if ($request->file('thumb')) $request->merge(['media_id' => MediaFileService::publicUpload($request->file('thumb'))->id]);

        $category->update([
            'title' => $request->title,
            'link' => $request->link,
            'description' => $request->description,
            'parent_id' => $request->parent_id,
            'media_id' => $request->media_id,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'عملیات ویرایش با موفقیت انجام شد');
    }

    public function destroy($id)
    {
        $item = Category::where('id', $id)->first();
        $item->delete();
        if ($item->media) $item->media->delete();

        return redirect()->back();
    }
}
