<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Category;
use App\News;
use App\Department;
use App\Position;
use App\User;

class PagesController extends Controller
{
    
    public function index()
    {
        return view('fe/pages/home');
    }
    public function about()
    {
        $departments = Department::all();
        $positions = Position::all();
        $users = User::all();
        return view('fe/pages/about',['positions'=>$positions,'users'=>$users, 'departments'=>$departments]);
    }
    
    public function news()
    {
        $categories = Category::all();
        $news = News::orderBy('id', 'DESC')->paginate(3);
        return view('fe/pages/news',['categories'=>$categories, 'news'=>$news]);
    }
    public function newsingle($id)
    {
        $categories = Category::all();
        $new = News::find($id);
        $news = News::orderBy('id', 'DESC')->paginate(4);
        return view('fe/pages/new',['categories'=>$categories, 'news'=>$news, 'new'=>$new]);
    }
}
