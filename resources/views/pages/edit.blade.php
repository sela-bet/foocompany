<html lang="en">
@extends('layout.head')

<body>
    <div class="container">
        <h1>Edit Employee Information</h1>
        <form action="{{route('modify',['id'=>$member->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"><input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="mb-2">
                <label for="first-name">First Name</label>
                <input class="form-control" value="{{$member->first_name}}" name="first_name" id="first_name" type="text">
            </div>
            <div class="mb-2">
                <label for="last-name">Last Name</label>
                <input class="form-control" value="{{$member->last_name}}" name="last_name" id="last_name" type="text">
            </div>
            <div class="mb-2">
                <label for="Email">Email</label>
                <input class="form-control" value="{{$member->email}}" name="email" id="email" type="text">
            </div>
            <div class="mb-2">
                <label for="department">Department</label>
                <select class="form-control" name="department_id" id="department">
                    <option value="1">IT</option>
                    <option value="2">Accounting</option>
                    <option value="3">Marketing</option>
                    <option value="4">Sale</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="phone">Phone</label>
                <input class="form-control" value="{{$member->phone}}" name="phone" id="phone" type="text">
            </div>
            <div class="mb-2">
                <label for="image">Select employee image</label>
                <input class="form-control" name="image" id="image" type="file">
            </div>
            <hr>
            <button class="btn btn-sm btn-primary" type="submit">Save Changes</button>
        </form>
    </div>
</body>

</html>