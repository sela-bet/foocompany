<html lang="en">
@extends('layout.head')

<body>
    {{view('layout.nav')}}
    <div class="container">
        <h1>Employee Registration</h1>
        <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"><input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="mb-2">
                <label for="first_name">First Name</label>
                <input class="form-control" name="first_name" id="first_name" type="text">
            </div>
            <div class="mb-2">
                <label for="last_name">Last Name</label>
                <input class="form-control" name="last_name" id="last_name" type="text">
            </div>
            <div class="mb-2">
                <label for="email">Email</label>
                <input class="form-control" name="email" id="email" type="text">
            </div>
            <div class="mb-2">
                <label for="department_id">Department</label>
                <select class="form-control" name="department_id" id="department_id">
                    <option value="1">IT</option>
                    <option value="2">Accounting</option>
                    <option value="3">Marketing</option>
                    <option value="4">Sale</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="phone">Phone</label>
                <input class="form-control" name="phone" id="phone" type="text">
            </div>
            <div class="mb-2">
                <label for="image">Select employee image</label>
                <input class="form-control" name="image" id="image" type="file">
            </div>
            <hr>
            <button class="btn btn-sm btn-primary" type="submit">Register</button>
        </form>
    </div>
</body>

</html>