<form class="form-inline myform" action="/search_results" method="GET" role="search">
    {{ csrf_field() }}
    <div class="input-group" data-toggle="tooltip" data-placement="top" title="Title">
        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil"></i></span>
        <input name="users" type="text" class="form-control" placeholder="Title" aria-describedby="basic-addon1">
    </div>

    <label data-toggle="tooltip" data-placement="top" title="select category" class="sr-only mr-sm-2"
           for="inlineFormCustomSelect">departments</label>
           {{dd($departments->user)}}
           @foreach ($departments as $item)
           @foreach ($item->user as $a)
               
           <p>{{$a->email}}</p> <br>
           @endforeach
           @endforeach
    <select name="department" data-toggle="tooltip" data-placement="top" title="select category"
            class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
            <option value="">Select category</option>
        @foreach ($departments as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>