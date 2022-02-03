<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {

        $roles = Role::all();
        $permissions = Permission::all();
        return view('panel.roles.index', compact('roles', 'permissions'));
    }

    public function create()
    {
        //
    }


    public function store(RoleRequest $request)
    {

        Role::create(['name' => $request->name])->syncPermissions($request->permissions);

        return redirect()->back()->with('success', 'عملیات ایجاد با موفقیت انجام شد');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
       $role = Role::findById($id);
       $permissions = Permission::all();

       return view('panel.roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::findById($id);

        $role->syncPermissions($request->permissions)->update(['name' => $request->name]);

        return redirect()->route('admin.roles.index')->with('success', 'عملیات ویرایش با موفقیت انجام شد');
    }

    public function destroy($id)
    {

        $permission = Role::where("id", $id)->first();

        $permission->delete();

        return redirect()->back()->with('success', 'عملیات حذف با موفقیت انجام شد');
    }
}
