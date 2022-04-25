@extends('admin.conquer2.layouts.dashboard')
@section('content')
    <table class='table'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Adress</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buyerCollection as $buyer)
                <tr>
                    <td>{{ $buyer->id }}</td>
                    <td>{{ $buyer->name }}</td>
                    <td>{{ $buyer->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('buyer/create') }}" class='btn btn-primary'>+ Supplier baru</a>
@endsection
