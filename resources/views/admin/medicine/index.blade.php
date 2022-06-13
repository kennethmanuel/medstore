@extends('admin.conquer2.layouts.dashboard')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div>
        <a href="#modalcreate" data-toggle="modal" class="btn btn-info">
            + Supplier Baru (modal)
        </a>
    </div>
    <div class="modal fade" id="modalcreate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" class="form-horizontal" role="form"
                        action="">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Generic Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="enter text"
                                         name="generic_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Restriction Formula</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="enter text"
                                         name="restriction_formula">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Price</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="enter text"
                                         name="price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Description</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="enter text"
                                         name="description">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Category</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="category_id">
                                        @foreach ($categoryCollection as $category)
                                            <option value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Faskes</label>
                                <div class="checkbox-list">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" 
                                            name="faskes1" > Faskes 1 </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" 
                                            name="faskes2"> Faskes 2 </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" 
                                            name="faskes3"> Faskes 3 </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
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
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicineCollection as $medicine)
                <div class="modal fade" id="detail_{{ $medicine->id }}" tabindex="-1" role="basic"
                    aria-hidden="true">
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
                    <td>
                        <a class='btn btn-info' href="{{ route('medicine.edit', $medicine->id) }}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('medicine.destroy', $medicine->id) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value='Delete'>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
