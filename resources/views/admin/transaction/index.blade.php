@extends('admin.conquer2.layouts.dashboard')
@section('content')
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Buyer</th>
                <th>Cashier</th>
                <th>Transaction Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactionCollection as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->buyer->name }}</td>
                    <td>{{ $transaction->user->name}}</td>
                    <td>{{ $transaction->transaction_date }}</td>
                    <td> Action </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
