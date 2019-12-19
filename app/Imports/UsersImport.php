<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            
            'fullname'    => $row['full_name'], 
            'usersname'     => 'ieg'.''.$row['staff_code'],
            'staff_code'    => $row['staff_code'],
            'phone'    => '0344445304', 
            'email'    => $row['email'],
            'image'    => 'nch.jpg', 
            'birthday'    => $row['dob'], 
            'dayin'    => $row['dayin'],
            // 'vacation'    => $row['vacation'],
            'id_department'    => $row['department'],
            'position'    => $row['position'],
            'password' => \Hash::make('123456'),
        ]);
    }
}
