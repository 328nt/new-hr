<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Position;
use App\User;
use App\Role;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $departments = Department::All();
        $users = User::All();
        return view('be/user/list', ['users'=>$users]);
    }

    public function create()
    {
        $departments = Department::All();
        $positions = Position::All();
        $roles = Role::All();
        return view('be/user/add', ['departments'=>$departments, 'positions'=>$positions,  'roles'=>$roles]);
    }
    public function store(Request $rq)
    {
        $this->validate($rq,[

        ],[

        ]);
        $users = new User();
        $users->fullname = $rq->fullname;
        $users->staff_code = $rq->staff_code;
        $users->usersname = 'ieg'.''.$rq->staff_code;
        $users->email = $rq->email;
        $users->birthday = $rq->birthday;
        $users->dayin = $rq->dayin;
        $users->vacation = $rq->vacation;
        $users->role = $rq->role;
        $users->password = bcrypt($rq->password);
        $users->id_department = $rq->id_department;
        if ($rq->hasFile('image')) {
            $file = $rq->file('image');
            $name = $file->getClientOriginalName();
            $img = str_random(4)."-".$name;
            while (file_exists("upload/users/".$img)){
                $img = str_random(4)."-".$name;
            }
            $file->move("upload/users", $img);
            $users->image = $img;
        } else {
            $users->image = "";
        }
        
        $users->save();
        return redirect('admin/users/list')->with('msg','thêm nhân viên thành công');
    }

    public function edit($id)
    {
        $departments = Department::All();
        $positions = Position::All();
        $roles = Role::All();
        $users = User::Find($id);
        return view('be/user/edit', ['positions'=>$positions, 'roles'=>$roles, 'departments'=>$departments, 'users'=>$users]);
    }

    public function update(Request $rq, $id)
    {
        $this->validate($rq,[

        ],[

        ]);
        $users = User::Find($id);
        
        $users->fullname = $rq->fullname;
        $users->staff_code = $rq->staff_code;
        $users->usersname = 'ieg'.''.$rq->staff_code;
        $users->email = $rq->email;
        $users->birthday = $rq->birthday;
        $users->dayin = $rq->dayin;
        $users->vacation = $rq->vacation;
        $users->password = bcrypt($rq->password);
        $users->id_department = $rq->id_department;
        $users->id_position = $rq->id_position;

        if ($rq->changepass == "on")
        {
            $this->validate($rq,[
                'password' => 'required',
                'repassword' => 'required|same:password',
            ],[
                'name.required' => 'mật khẩu không được để trống',
                'repassword.same' => 'mật khẩu nhập lại chưa đúng'

            ]);
            $users->password = bcrypt($rq->password);
        }


        if ($rq->HasFile('image')) {
            $file = $rq->file('image');
            $name = $file->getClientOriginalName();
            $img = str_random(4)."-".$name;
            while (file_exists("upload/users/".$img)){
                $img = str_random(4)."-".$name;
            }
            $file->move("upload/users", $img);
            unlink("upload/users/".$users->image);
            $users->image = $img;
        }
        $users->save();
        return redirect('admin/users/edit/'.$id)->with('msg','sửa thông tin nhân viên thành công');
    }

    public function destroy($id)
    {
        $users = User::Find($id);
        $users->delete();
        return redirect('admin/users/list')->with('msg','xóa nhân viên thành công !');
    }

    public function getloginadmin()
    {
        return view('be/login');
    }
    public function postloginadmin(Request $rq)
    {
        $this->validate($rq,[

        ],[

        ]);
        if (Auth::attempt(['email' => $rq->email, 'password' => $rq->password])) {
            return redirect('admin/users/list');
        }
        else {
            return redirect('admin/login')->with('msg','sai tài khoản rồi thím ơi !');
        }
    }
    public function logoutadmin()
    {
        Auth::logout();
        return redirect('admin/login')->with('msg','Đăng xuất thành công bạn ôi !');
    }
}
