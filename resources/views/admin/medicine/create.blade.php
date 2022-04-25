@extends('admin.conquer2.layouts.dashboard')
@section('content')
    <form class="form-horizontal" role="form">
        <div class="form-body">
            <div class="form-group">
                <label class="col-md-3 control-label">Generic Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="enter text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">dropdown</label>
                <div class="col-md-9">
                    <select class="form-control">
                        @foreach ($categoryCollection as $category)
                            <option value="{{ $category->name }}"> {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </form>
@endsection
