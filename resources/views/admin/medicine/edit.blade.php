@extends('admin.conquer2.layouts.dashboard')
@section('content')
    {{-- {{ dd($medicine)  }} --}}
    <form method="POST" class="form-horizontal" role="form" action="{{ route('medicine.update', $medicine->id) }}">
        @csrf
        @method('PUT')
        <div class="form-body">
            <div class="form-group">
                <label class="col-md-3 control-label">Generic Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="enter text"
                        value="{{ $medicine->generic_name }}" name="generic_name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Restriction Formula</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="enter text"
                        value="{{ $medicine->restriction_formula }}" name="restriction_formula">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Price</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="enter text" value="{{ $medicine->price }}" name="price">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Description</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="enter text"
                        value="{{ $medicine->description }}" name="description">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Category</label>
                <div class="col-md-9">
                    <select class="form-control" name="category_id">
                        @foreach ($categoryCollection as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == $medicine->category_id ? 'selected' : '' }}> {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Faskes</label>
                <div class="checkbox-list">
                    <label class="checkbox-inline">
                        <input type="checkbox" {{ $medicine->faskes1 == 1 ? 'checked' : '' }} name="faskes1" value="{{ $medicine->faskes1 }}"> Faskes 1 </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" {{ $medicine->faskes2 == 1 ? 'checked' : '' }} name="faskes2" value="{{ $medicine->faskes2 }}"> Faskes 2 </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" {{ $medicine->faskes3 == 1 ? 'checked' : '' }} name="faskes3" value="{{ $medicine->faskes3 }}"> Faskes 3 </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
