<?php

namespace App\Http\Controllers;

use App\News;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categories = Category::All();
        $news = News::All();
        return view('be/news/list', ['news'=>$news, 'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::All();
        return view('be/news/add', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $rq)
    {
        $this->validate($rq,[
            'title' => 'required|max:500',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required',

        ],[
            'title.required' =>'chưa nhập tiêu đề',
            'description.required' =>'chưa nhập tóm tắt',
            'content.required' =>'chưa nhập nội dung',
            'image.required' => 'vui lòng nhập ảnh',

        ]);
        $news = new News();
        $news->author = Auth::user()->id;
        $news->title = $rq->title;
        $news->titlenone = str_slug($rq->title);
        $news->id_category = $rq->id_category;
        $news->description = $rq->description;
        $news->content = $rq->content;
        if ($rq->hasFile('image')) {
            $file = $rq->file('image');
            $name = $file->getClientOriginalName();
            $img = str_random(4)."-".$name;
            while (file_exists("upload/news/".$img)){
                $img = str_random(4)."-".$name;
            }
            $file->move("upload/news", $img);
            $news->image = $img;
        } else {
            $news->image = "";
        }
        
        $news->save();
        return redirect('admin/news/list')->with('msg','thêm nhân viên thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::All();
        $news = News::Find($id);
        return view('be/news/edit', ['categories'=>$categories, 'news'=>$news ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, $id)
    {
        
        $this->validate($rq,[

        ],[

        ]);
        $news = News::find($id);
        $news->title = $rq->title;
        $news->titlenone = str_slug($rq->title);
        $news->id_category = $rq->id_category;
        $news->description = $rq->description;
        $news->content = $rq->content;
        if ($rq->HasFile('image')) {
            $file = $rq->file('image');
            $name = $file->getClientOriginalName();
            $img = str_random(4)."-".$name;
            while (file_exists("upload/news/".$img)){
                $img = str_random(4)."-".$name;
            }
            $file->move("upload/news", $img);
            unlink("upload/news/".$news->image);
            $news->image = $img;
        }
        
        $news->save();
        return redirect('admin/news/edit/'.$id)->with('msg','Sửa bài viết thành công thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('admin/news/list')->with('msg', 'xóa bài viết thành công');
    }
}
