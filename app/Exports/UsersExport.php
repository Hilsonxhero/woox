<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{


    public function headings(): array
    {
        return ['id', 'username', 'email', 'phone'];
    }
    public function collection()
    {
        $users = DB::table('users')
            ->select('id', 'username', 'email', 'phone')->get()->toArray();

        return collect($users);
    }
}
