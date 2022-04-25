@extends('admin.conquer2.layouts.dashboard')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Generic Name</th>
                <th>Form</th>
                <th>Restriction Formula</th>
                <th>Description</th>
                <th>Faskes TK 1</th>
                <th>Faskes TK 2</th>
                <th>Faskes TK 3</th>
                <th>Category</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicineCollection as $medicine)
                <div class="modal fade" id="detail_{{ $medicine->id }}" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">{{ $medicine->generic_name }}</h4>
                            </div>
                            <div class="modal-body">
                                <h5>Description</h5>
                                <p>{{ $medicine['description'] }}</p>
                                {{-- <img src="{{ asset('images/') . $li->id . '.jpg' }}" height='200px' /> --}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <tr>
                    <td>
                        <a class="btn btn-default" data-toggle="modal" href="#detail_{{ $medicine->id }}"
                            data-toggle="modal">{{ $medicine->id }}</a>
                    </td>
                    <td>{{ $medicine['generic_name'] }}</td>
                    <td>{{ $medicine['form'] }}</td>
                    <td>{{ $medicine['restriction_formula'] }}</td>
                    <td>{{ $medicine['description'] }}</td>
                    <td>{{ $medicine['faskes1'] }}</td>
                    <td>{{ $medicine['faskes2'] }}</td>
                    <td>{{ $medicine['faskes3'] }}</td>
                    <td>{{ $medicine['category']['name'] }}</td>
                    <td>
                        <a class='btn btn-info' href="{{ route('catalogue.medicine', $medicine->id) }}"
                            data-target="#show{{ $medicine->id }}" data-toggle='modal'>detail</a>
                        <div class="modal fade" id="show{{ $medicine->id }}" tabindex="-1" role="basic"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- put animated gif here -->
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
