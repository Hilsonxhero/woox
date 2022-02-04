<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\MediaFileService;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('panel.users.index', compact('users'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::where('id', $id)->first();

        $roles = Role::all();
        return view('panel.users.edit', compact('user', 'roles'));
    }


    public function update(UserRequest $request, $id)
    {



        $user = User::where('id', $id)->first();


        if ($request->file('avatar')) {

            $request->merge(['media_id' => MediaFileService::publicUpload($request->file('avatar'))->id]);

            if ($user->media) {
                $user->media->delete();
            }
        }

        if (!is_null($request->password)) {
            $update['password'] = bcrypt($request->password);
            $request->merge(['password' => bcrypt($request->password)]);
        }



        $user->syncRoles($request->role)->update([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'national_number' => $request->national_number,
            'media_id' => $request->media_id ?? $user->media_id,
            'status' => $request->status,
            'password' => $request->password ?? $user->password
        ]);


        return redirect()->route('admin.users.index')->with('success', 'عملیات ویرایش با موفقیت انجام شد');
    }

    public function destroy($id)
    {
        //
    }
}
