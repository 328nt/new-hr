<?php

namespace App\Http\Controllers;

use App\Form;
use App\Department;
use App\Procedure;
use View;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
	{
		$forms = Form::All();
		$departments = Department::All();
		$procedures = Procedure::All();
		view::share('forms',$forms);
		view::share('departments',$departments);
		view::share('procedures',$procedures);
    }
    public function index()
    {
        return view('be/forms/list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('be/forms/add');
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
            'name' => 'required|max:500',
            'content' => 'required',

        ],[
            'name.required' =>'chưa nhập tiêu đề',
            'content.required' =>'chưa nhập tóm tắt',

        ]);
        $form = new Form();
        $form->id_department = $rq->id_department;
        $form->id_procedure = $rq->id_procedure;
        $form->name = $rq->name;
        $form->content = $rq->content;
        if ($rq->hasFile('file')) {
            $file = $rq->file('file');
            $name = $file->getClientOriginalName();
            while (file_exists("upload/procedure/".$name)){
                $name = str_random(4)."-".$name;
            }
            $file->move("upload/procedure", $name);
            $form->file = $name;
        } else {
            $form->file = "";
        }
        
        $form->save();
        return redirect('admin/forms/list')->with('msg','thêm biểu mẫu thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forms = Form::Find($id);
        return view('be/forms/edit', ['forms'=>$forms ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, $id)
    {
        
        $this->validate($rq,[

        ],[

        ]);
        $form = Form::find($id);
        $form->title = $rq->title;
        $form->slug_title = str_slug($rq->title);
        $form->description = $rq->description;
        $form->content = $rq->content;
        $form->link = $rq->link;
        
        $form->save();
        return redirect('admin/forms/edit/'.$id)->with('msg','Sửa biểu mẫu thành công thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $rq)
    {
        $form = Form::find($rq->id);
        $form->delete();
        return redirect('admin/forms/list')->with('msg', 'xóa biểu mẫu thành công');
    }
}
