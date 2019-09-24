<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::All();
        return view('be/department/list',['departments'=>$departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('be/department/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

        ],[

        ]);
        $departments = New Department();
        $departments->name = $request->name;
        $departments->save();
        return redirect('admin/department/add')->with('msg','Thêm phòng ban thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments = Department::Find($id);
        return view('be/department/edit',['departments'=>$departments]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $departments =Department::Find($id);
        $this->validate($request, [

        ],[

        ]);
        $departments->name = $request->name;
        $departments->save();
        return redirect('admin/department/list')->with('msg','Sửa phòng ban thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departments = Department::Find($id);
        $departments->delete();
        return redirect('admin/department/list')->with('msg','Xóa phòng ban thành công');
    }
}
