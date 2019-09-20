<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            
            'fullname'    => $row[1], 
            'usersname'     => 'ieg'.''.$row[3],
            'staff_code'    => $row[3], 
            'email'    => $row[5],
            'image'    => $row[9], 
            'birthday'    => $row[10], 
            'dayin'    => $row[11],
            'vacation'    => $row[12],
            'id_department'    => $row[14],
            'id_position'    => $row[15],
            'password' => \Hash::make('123456'),
        ]);
    }
}
