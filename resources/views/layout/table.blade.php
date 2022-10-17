<div class="container">
        <h1>Employee Info</h1>
        <hr>
        <a href="{{route('register')}}">New Employee</a>
        <table>
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
                    <td><a href="{{route('edit')}}">Edit</a></td>
                </tr>
                @endforeach
            </thead>
        </table>
    </div>