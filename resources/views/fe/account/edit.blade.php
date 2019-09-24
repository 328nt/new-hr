@extends('fe.layouts.index')
@section('title')
thông tin cá nhân
@endsection
@section('content')

@include('msg')

<section class="event_part section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12 col-md-12">
                    <div class="event_slider_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-6">
                                <div class="section_tittle text-center">
                                    <h2>Profile</h2>
                                </div>
                            </div>
                        </div>
                        <form action="staff/account/{{$user->id}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="ibox">
                                        <div class="ibox-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Fullname</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="fullname" type="text"
                                                        value="{{$user->fullname}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="email" readonly type="text"
                                                        value="{{$user->email}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Sđt</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="phone" type="text"
                                                        value="{{$user->lead}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="font-normal">Mã nv</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" readonly name="staff_code"
                                                                type="number" value="{{$user->staff_code}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="font-normal">Ngày phép/năm</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" readonly name="vacation"
                                                                type="number" value="{{$user->vacation}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="font-normal">Ngày sinh</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" readonly name="birthday"
                                                                type="text" value="{{$user->birthday}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="font-normal">Ngày vào công ty</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" readonly name="dayin"
                                                                type="text" value="{{$user->dayin}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="font-normal">Phòng ban</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" readonly name="id_department"
                                                                type="text" value="{{$user->department->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="font-normal">Chức vụ</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" readonly name="id_position"
                                                                type="text" value="{{$user->position->name}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                @if (Auth::user()->id == $user->id)


                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Change
                                                        password</label>
                                                    <div class="col-sm-10">
                                                        <input type="checkbox" name="changepass" id="changepassword">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control password" name="password"
                                                            type="password" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Re-Pasword</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control password" name="repassword"
                                                            type="password" disabled>
                                                    </div>
                                                </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="upload/users/{{$user->image}}" alt="" style="width:100%; padding-bottom:30px;">
                                    <br>
                                    @if (Auth::user()->id == $user->id)
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10" style="padding-bottom:20px;">
                                            <input class="form-control" name="image" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit">Submit</button>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
@endsection