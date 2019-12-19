<form class="form-inline myform" action="/search_results" method="GET" role="search">
    {{ csrf_field() }}

    <select name="department" data-toggle="tooltip" data-placement="top" title="select category"
            class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
            <option value="">Select category</option>
        @foreach ($departments as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <select name="department" data-toggle="tooltip" data-placement="top" title="select category"
            class="custom-select mb-2 mr-sm-2 mb-sm-0" id="staff">
            <option value="">Select category</option>
        @foreach ($users as $category)
            <option value="{{ $category->id }}">{{ $category->fullname }}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary">Submit</button>

    <script>
    
    $(document).ready(function() {
        $("#department").change(function(){
            var id_department = $(this).val();
            $.get("ajax/staff/"+id_department, function(data){
             $("#staff").html(data);
            });
        });
    }); 
    </script>
</form>