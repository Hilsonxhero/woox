<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Services\MediaFileService;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use niklasravnsborg\LaravelPdf\PdfWrapper;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('panel.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('panel.users.create', compact('roles'));
    }


    public function store(UserRequest $request)
    {

        if ($request->file('avatar')) {
            $request->merge(['media_id' => MediaFileService::publicUpload($request->file('avatar'))->id]);
        }

        if (!is_null($request->password)) {
            $request->merge(['password' => bcrypt($request->password)]);
        }

        $user = User::Create([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'national_number' => $request->national_number,
            'media_id' => $request->media_id,
            'status' => $request->status,
            'password' => $request->password,
        ]);

        $user->syncRoles($request->role);

        return redirect()->route('admin.users.index')->with('success', 'عملیات ایجاد با موفقیت انجام شد');
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

    public function export()
    {
        switch (request('format')) {

            case 'excel':

                return Excel::download(new UsersExport, 'users.xlsx');

                break;

            case 'csv':

                return Excel::download(new UsersExport, 'users.csv');

                break;

            case 'pdf':

                $users = User::all();
                $pdf = PDF::loadView('exports.users', compact('users'));
                return $pdf->download('users.pdf');

                break;
        }


        return redirect()->back();
    }

    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        if ($user->media) $user->media->delete();
        $user->delete();
        return redirect()->back()->with('success', 'عملیات حذف با موفقیت انجام شد');
    }
}
