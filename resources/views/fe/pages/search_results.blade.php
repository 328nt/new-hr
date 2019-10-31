
@extends('fe/layouts/index')
@section('content')

@if(isset($ads))
<h2>Search results</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ads as $ad)
        <tr>
            <td>{{$ad->title}}</td>
            <td>{{$ad->description}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
no results!
@endif
@endsection