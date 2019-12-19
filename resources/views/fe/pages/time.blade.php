<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timesheet</title>
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }

        .pd30 {
            padding-top: 5px;
        }
    </style>
</head>

<body>


    <form action="rentime" method="post">
        {{ csrf_field() }}
        <div class="row pd30">
            <label class="col-sm-2">Time In:</label>
            <input name="timein" type="time"  min="07:00" max="23:00" placeholder="hh:mm">
        </div>
        <div class="row pd30">
            <label class="col-sm-2">Time Out:</label>
            <input name="timeout" type="time"  min="07:00" max="23:00" placeholder="hh:mm">
        </div>
        <div class="row pd30">
            <label class="col-sm-2">Base:</label>
            <input name="timeout" type="time"  min="07:00" max="23:00" placeholder="hh:mm">
        </div>
        <div class="row pd30">
            <button class="btn btn-info" type="submit">Submit</button>
        </div>
    </form>
@if (isset($time1))
    
<table id="customers">
    <tr>
        <th>Time in</th>
        <th>Time out</th>
        <th>Lunch</th>
        <th>Total time</th>
        <th>Time work</th>
        <th>Status</th>
    </tr>
    <tr>
        <td>{{date("H:i",$time1)}}</td>
        <td>{{date("H:i",$time2)}}</td>
        <td>{{$lunch}}</td>
        <td>{{$time }}</td>
        <td>{{date("H:i",strtotime($time) - strtotime($lunch))}}</td>
        <td>
            @if (strtotime($time) >= strtotime('08:00'))
            ok du gio
            @else
            thieu gio lam {{date("H:i",strtotime($time) - 1.5*60*60)}}
            @endif
            <br>
            @if (strtotime($time) - 8*60*60 > strtotime('02:00'))
            thua {{date("H:i",strtotime($time) - strtotime('08:00') - 1.5*60*60)}} tieng
            @endif
        </td>
    </tr>
</table>
@endif
</body>
<script>

</script>
</html>