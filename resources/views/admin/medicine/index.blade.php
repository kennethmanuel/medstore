@extends('admin.conquer2.layouts.dashboard')
@section('content')
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Generic Name</th>
                <th>Form</th>
                <th>Restriction Formula</th>
                <th>Description</th>
                <th>Faskes TK 1</th>
                <th>Faskes TK 2</th>
                <th>Faskes TK 3</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicineCollection as $medicine)
                <tr>
                    <td>{{ $medicine['generic_name'] }}</td>
                    <td>{{ $medicine['form'] }}</td>
                    <td>{{ $medicine['restriction_formula'] }}</td>
                    <td>{{ $medicine['description'] }}</td>
                    <td>{{ $medicine['faskes_tk1'] }}</td>
                    <td>{{ $medicine['faskes_tk2'] }}</td>
                    <td>{{ $medicine['faskes_tk3'] }}</td>
                    <td>{{ $medicine['category']['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
