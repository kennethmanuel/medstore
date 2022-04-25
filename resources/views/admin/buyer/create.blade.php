@extends('admin.conquer2.layouts.dashboard')
@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <h2>Vertical (basic) form</h2>
        <form method="POST" action="{{ url('buyer') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
