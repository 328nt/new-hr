
@extends('be.layouts.index')
@section('title')
list
@endsection
@section('content')

@include('msg')
<div class="col-md-8">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Thêm nhân viên</div>
            <div class="ibox-tools">
                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <div class="ibox-body">
            <form action="admin/users/edit/{{$users->id}}"  method="post" enctype="multipart/form-data" class="form-horizontal" id="form-sample-1" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Fullname</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="fullname" type="text" value="{{$users->fullname}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="email" type="text" value="{{$users->email}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="phone" type="text" value="{{$users->lead}}">
                    </div>
                </div>
                
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Change password</label>
                        <div class="col-sm-10">
                                <input type="checkbox" name="changepass" id="changepassword">
                        </div>
                    </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input class="form-control password" name="password" type="password" disabled="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Re-Pasword</label>
                    <div class="col-sm-10">
                        <input class="form-control password" name="repassword" type="password" disabled="" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Staff Code</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="staff_code" type="number" value="{{$users->staff_code}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Vacation</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="vacation" type="number" value="{{$users->vacation}}">
                    </div>
                </div>
                <div class="form-group row" id="date_1">
                    <div class="col-md-6">
                        <label class="font-normal">Birthday</label>
                        <div class="input-group date">
                            <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                            <input class="form-control" name="birthday" type="text" value="{{$users->birthday}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="font-normal">Day in</label>
                        <div class="input-group date">
                            <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                            <input class="form-control" name="dayin" type="text" value="{{$users->dayin}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-control-label">Department</label>
                    <select name="id_department" class="form-control select2_demo_1">
                        @foreach ($departments as $de)
                        <option
                        @if ($users->department->id == $de->id)
                            {{'selected'}}
                        @endif
                        value="{{$de->id}}">{{$de->name}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-control-label">Position</label>
                    <select name="id_position" class="form-control select2_demo_1">
                        @foreach ($positions as $po)
                        <option 
                        @if ($users->position->id == $po->id)
                            {{'selected'}}
                        @endif
                        value="{{$po->id}}">{{$po->name}} </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                        <label class="form-control-label">Role</label>
                        <select name="role" class="form-control select2_demo_1">
                            @foreach ($roles as $role)
                            <option
                            @if ($users->roles->id == $role->id)
                                {{'selected'}}
                            @endif
                            value="{{$role->id}}">{{$role->name}} </option>
                            @endforeach
                        </select>
                    </div>
                
                <div class="form-group row">
                    
                        <td><img width="50px" src="upload/users/{{$users->image}}" alt=""></td>
                        <label class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="image" type="file">
                        </div>
                    </div>
                <div class="form-group row">
                    <div class="col-sm-10 ml-sm-auto">
                        <button class="btn btn-info" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('script')

<script>
        $(document).ready(function(){
            $("#changepassword").change(function(){
                if($(this).is(":checked"))
                {
                    $(".password").removeAttr('disabled');
                }
                else
                {
                    $(".password").attr('disabled','');
                }
            })
        })
    </script>

<script src="assets/js/scripts/form-plugins.js" type="text/javascript"></script>
<script type="text/javascript">
    $("#form-sample-1").validate({
        rules: {
            name: {
                minlength: 2,
                required: !0
            },
            email: {
                required: !0,
                email: !0
            },
            url: {
                required: !0,
                url: !0
            },
            number: {
                required: !0,
                number: !0
            },
            min: {
                required: !0,
                minlength: 3
            },
            max: {
                required: !0,
                maxlength: 4
            },
            password: {
                required: !0
            },
            password_confirmation: {
                required: !0,
                equalTo: "#password"
            }
        },
        errorClass: "help-block error",
        highlight: function(e) {
            $(e).closest(".form-group.row").addClass("has-error")
        },
        unhighlight: function(e) {
            $(e).closest(".form-group.row").removeClass("has-error")
        },
    });
</script>
<script src="assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
@endsection