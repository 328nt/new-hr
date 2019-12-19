<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Gallery_videos;
use App\Category;
use App\News;
use App\Department;
use App\Position;
use App\Form;
use App\Procedure;
use App\Role;
use App\User;

class PagesController extends Controller
{
    function __construct()
	{
		$departments = Department::All();
        $positions = Position::all();
        $categories = Category::all();
		$forms = Form::All();
		$procedures = Procedure::All();
		$users = User::All();
		view::share('departments',$departments);
		view::share('positions',$positions);
		view::share('categories',$categories);
		view::share('users',$users);
		view::share('procedures',$procedures);
		view::share('forms',$forms);
    }
    
    public function getstaff($id_department)
    {
        $users = User::where('id_department', $id_department)->get();
        // dd($users);
        foreach ($users as $user) {
            echo "<option value ='".$user->id."'> ".$user->fullname."</option>";
        }
    }
    public function index()
    {
        return view('fe/pages/home');
    }
    public function about()
    {
        return view('fe/pages/about');
    }
    public function procedure($id)
    {
        
        $department = Department::find($id);
        $form = Form::where('id_department', $id)->get();
        return view('fe/pages/form_dpt', compact('department', 'form'));

    }

    
    public function department($id)
    {
        $department = Department::find($id);
        $usersid = User::where('id_department', $id)->paginate(3);
        return view('fe/pages/departments',['department'=>$department,'usersid'=>$usersid]);
    }

    
    public function category($id)
    {
        $spotlight = News::where('hightlight', 1)->take(3)->get();
        $category = Category::find($id);
        $news = News::orderBy('id', 'DESC')->paginate(3);
        $newsid = News::where('id_category', $id)->paginate(3);
        return view('fe/pages/categories',['spotlight'=>$spotlight, 'category'=>$category, 'news'=>$news, 'newsid'=>$newsid]);
    }
    
    public function news()
    {
        $spotlight = News::where('hightlight', 1)->take(3)->get();
        $news = News::orderBy('id', 'DESC')->paginate(3);
        return view('fe/pages/news',['spotlight'=>$spotlight, 'news'=>$news]);
    }
    public function newsingle($id)
    {
        $spotlight = News::where('hightlight', 1)->take(3)->get();
        $new = News::find($id);
        $previous = News::where('id', '<', $new->id)->max('id');
        $previous_title = News::find($previous);
        $next = News::where('id', '>', $new->id)->min('id');
        $next_title = News::find($next);
        $news = News::orderBy('id', 'DESC')->paginate(6);
        return view('fe/pages/new',['next'=>$next,'next_title'=>$next_title, 'previous'=>$previous,'previous_title'=>$previous_title, 'spotlight'=>$spotlight, 'news'=>$news, 'new'=>$new]);
    }

    public function images()
    {
        return view('fe.pages.images');
    }

    
    public function gallery_videos()
    {
        $videos = Gallery_videos::all();
        return view('fe.pages.gallery_videos', compact('videos'));
    }
    public function video($id)
    {
        $video = Gallery_videos::find($id);
        $previous = Gallery_videos::where('id', '<', $video->id)->max('id');
        $previous_title = Gallery_videos::find($previous);
        $next = Gallery_videos::where('id', '>', $video->id)->min('id');
        $next_title = Gallery_videos::find($next);
        $videos = Gallery_videos::orderBy('id', 'DESC')->paginate(4);
        return view('fe.pages.video', compact('video', 'previous','previous_title', 'next_title', 'next', 'videos'));
    }


    public function time()
    {
        return view('fe/pages/time');
    }
    public function rentime(Request $rq)
    {
        $time1 = strtotime($rq->timein);
        $time2 = strtotime($rq->timeout);
        $lunch = date("H:i", 1.5*60*60);
        $time = date("H:i",$time2-$time1);
        // dd($time);
        return view('fe/pages/time', compact('time','time1','time2', 'lunch'));
    }

    public function search()
    {
        return view('fe/pages/search');
    }


    

    public function search_results(Request $rq) 
    {
        $fullname = trim($rq->search);
        $dpt = $rq->department;
        $staff = User::where('fullname', 'like',"%{$fullname}%")->where('id_department', $dpt)->get();
        $data['staff'] = $staff;
        dd($data['staff']);
        return view('fe/pages/about', compact('staff'));
    }


    //account
    public function getaccount($id)
    {
        $departments = Department::All();
        $positions = Position::All();
        $roles = Role::All();
        $user = User::Find($id);
        return view('fe/account/edit', ['positions'=>$positions, 'roles'=>$roles, 'departments'=>$departments, 'user'=>$user]);
    }

    public function postaccount(Request $rq, $id)
    {
        $this->validate($rq,[

        ],[

        ]);
        $users = User::Find($id);
        $users->lead = $rq->phone;

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
        return redirect('staff/account/'.$id)->with('msg','sửa thông tin nhân viên thành công');
    }

    

    public function getloginstaff()
    {
        return view('fe/login');
    }
    public function postloginstaff(Request $rq)
    {
        $this->validate($rq,[

        ],[

        ]);
        if (Auth::attempt(['usersname' => $rq->usersname, 'password' => $rq->password])) {
            return redirect('/about');
        }
        else {
            return redirect('staff/login')->with('msg','sai tài khoản rồi thím ơi !');
        }
    }
    public function logoutstaff()
    {
        Auth::logout();
        return redirect('staff/login')->with('msg','Đăng xuất thành công bạn ôi !');
    }
}
