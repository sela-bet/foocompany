<html lang="en">

<head>
    <title>{{config('app.name','Employee Management')}}</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    {{view('layout.nav')}}
    <div class="container">
        <h1>Employee Information</h1>
        <hr>
        <!-- <table class="table">
            <thead>
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Department</td>
                    <td>Image</td>
                    <td>Action</td>
                </tr>
                @foreach($members as $member)
                <tr>
                    <td>{{$member['first_name']}}</td>
                    <td>{{$member['last_name']}}</td>
                    <td>{{$member['email']}}</td>
                    <td>{{$member['phone']}}</td>
                    <td>{{$member['department_id']}}</td>
                    <td><img width="100px" height="100px" src="{{asset('/storage/images/employee/'.$member['image'])}}"></td>
                    <td><a class="btn btn-default" href="{{route('edit')}}">Edit</a></td>
                </tr>
                @endforeach
            </thead>
        </table> -->
        <div class="row">
            @foreach($members as $member)
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" >
                        <img  alt="Lights" style="width:100%" src="{{asset('/storage/images/employee/'.$member['image'])}}">
                        <div class="caption">
                            <p>{{$member['first_name'].' '.$member['last_name']}}</p>
                            <p>{{$member['email']}}</p>
                        </div>
                        <a class="btn btn-default" href="{{ route('edit',['id'=>$member->id ])}}">Edit</a>
                    </a>
                </div>
                
            </div>
            @endforeach

        </div>
</body>

</html>