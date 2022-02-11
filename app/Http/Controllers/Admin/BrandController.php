<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\MediaFileService;
use App\Http\Requests\BrandRequest;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();

        return view('panel.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('panel.brands.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        if ($request->file('thumb')) $request->merge(['media_id' => MediaFileService::publicUpload($request->file('thumb'))->id]);

        $item =  Brand::create([
            'title' => $request->title,
            'link' => $request->link,
            'description' => $request->description,
            'parent_id' => $request->category_id,
            'media_id' => $request->media_id,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.brands.index')->with('success', 'عملیات ایجاد با موفقیت انجام شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::select('id', 'title')->get();

        $brand = Brand::query()->where('id', $id)->first();

        return view('panel.brands.edit', compact('categories', 'brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $request, $id)
    {
        $brand = Brand::query()->where('id', $id)->first();

        if ($request->file('thumb')) {
            $request->merge(['media_id' => MediaFileService::publicUpload($request->file('thumb'))->id]);

            if ($brand->media) {
                $brand->media->delete();
            }
        }



        $brand->update([
            'title' => $request->title,
            'link' => $request->link,
            'description' => $request->description,
            'category_id' => $request->category_id ?? $brand->category_id,
            'media_id' => $request->media_id ?? $brand->media_id,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.brands.index')->with('success', 'عملیات ویرایش با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
