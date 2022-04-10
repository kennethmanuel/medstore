@extends('admin.conquer2.layouts.dashboard')
@section('content')
    Dashboard <small>statistics and more</small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" onclick="showInfo()">
                    <i class="icon-bulb"></a></i>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height btn-primary" data-container="body"
                data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i
                    class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>
    <div id="showinfo"></div>
@endsection
@section('javascript')
    <script>
        function showInfo() {
            // alert('yo');
            $.ajax({
                type: 'POST',
                url: '{{ route('medicine.showInfo') }}',
                data: '_token=<?php echo csrf_token(); ?>',
                success: function(data) {
                    $('#showinfo').html(data.msg);
                }
            });
        }
    </script>
@endsection
