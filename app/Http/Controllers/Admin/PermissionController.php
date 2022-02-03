<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{

    public function index()
    {

        $permissions = Permission::all();
        return view('panel.permissions.index', compact('permissions'));
    }

    public function create()
    {
        //
    }


    public function store(PermissionRequest $request)
    {
//        dd($request->all());
        Permission::create([
            'name' => $request->name
        ]);

        return redirect()->back()->with('success', 'عملیات ایجاد با موفقیت انجام شد');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $permission = Permission::findById($id);

        $permission->update([
            'name' => $request->name
        ]);

        return redirect()->back()->with('success', 'عملیات ویرایش با موفقیت انجام شد');
    }

    public function destroy($id)
    {

        $permission = Permission::where("id",$id)->first();

        $permission->delete();

        return redirect()->back()->with('success', 'عملیات حذف با موفقیت انجام شد');
    }
}
