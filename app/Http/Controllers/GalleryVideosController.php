<?php

namespace App\Http\Controllers;
use Auth;
use App\Gallery_videos;
use App\Comment;
use Illuminate\Http\Request;

class GalleryVideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Gallery_videos::All();
        return view('be/videos/list', ['videos'=>$videos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('be/videos/add');
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
            'link' => 'required',

        ],[
            'title.required' =>'chưa nhập tiêu đề',
            'description.required' =>'chưa nhập tóm tắt',
            'link.required' => 'vui lòng nhập link',

        ]);
        $news = new Gallery_videos();
        $news->user_id = Auth::user()->id;
        $news->title = $rq->title;
        $news->slug_title = str_slug($rq->title);
        $news->description = $rq->description;
        $news->content = $rq->content;
        $news->link = $rq->link;
        
        $news->save();
        return redirect('admin/videos/list')->with('msg','thêm video thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery_videos  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery_videos  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videos = Gallery_videos::Find($id);
        return view('be/videos/edit', ['videos'=>$videos ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery_videos  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, $id)
    {
        
        $this->validate($rq,[

        ],[

        ]);
        $news = Gallery_videos::find($id);
        $news->title = $rq->title;
        $news->slug_title = str_slug($rq->title);
        $news->description = $rq->description;
        $news->content = $rq->content;
        $news->link = $rq->link;
        
        $news->save();
        return redirect('admin/videos/edit/'.$id)->with('msg','Sửa video thành công thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery_videos  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $rq)
    {
        $news = Gallery_videos::find($rq->id);
        $news->delete();
        return redirect('admin/videos/list')->with('msg', 'xóa video thành công');
    }
}
