
@extends('fe/layouts/index')
@section('content')

@if(isset($staff))
<h2>Search results</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($staff as $ad)
        <tr>
            <td>{{$ad->fullname}}</td>
            <td>{{$ad->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
no results!
@endif
@endsection