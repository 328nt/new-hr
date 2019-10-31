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
            
            'fullname'    => $row['name'], 
            'usersname'     => 'ieg'.''.$row['staff_code'],
            'staff_code'    => $row['staff_code'],
            'phone'    => $row['phone'], 
            'email'    => $row['email'].''.'@ieg.vn',
            'image'    => $row['image'], 
            'birthday'    => $row['dob'], 
            'dayin'    => $row['dayin'],
            'vacation'    => $row['vacation'],
            'id_department'    => $row['department'],
            'id_position'    => $row['position'],
            'password' => \Hash::make('123456'),
        ]);
    }
}
