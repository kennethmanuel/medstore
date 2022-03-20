<script src="{{ asset('conquer2/plugins/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('conquer2/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ asset('conquer2/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('conquer2/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('conquer2/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}"
type="text/javascript"></script>
<script src="{{ asset('conquer2/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('conquer2/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('conquer2/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('conquer2/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
<script src="{{ asset('conquer2/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript">
</script>
<script src="{{ asset('conquer2/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript">
</script>
<script src="{{ asset('conquer2/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript">
</script>
<script src="{{ asset('conquer2/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript">
</script>
<script src="{{ asset('conquer2/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
<script src="{{ asset('conquer2/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript">
</script>
<script src="{{ asset('conquer2/plugins/jquery.peity.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('conquer2/plugins/jquery.pulsate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('conquer2/plugins/jquery-knob/js/jquery.knob.js') }}" type="text/javascript"></script>
<script src="{{ asset('conquer2/plugins/flot/jquery.flot.js') }}" type="text/javascript"></script>
<script src="{{ asset('conquer2/plugins/flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
<script src="{{ asset('conquer2/plugins/bootstrap-daterangepicker/moment.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('conquer2/plugins/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript">
</script>
<script src="{{ asset('conquer2/plugins/gritter/js/jquery.gritter.js') }}" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="{{ asset('conquer2/plugins/fullcalendar/fullcalendar/fullcalendar.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('conquer2/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('conquer2/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('conquer2/scripts/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('conquer2/scripts/index.js') }}" type="text/javascript"></script>
<script src="{{ asset('conquer2/scripts/tasks.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        App.init(); // initlayout and core plugins
        Index.init();
        Index.initJQVMAP(); // init index page's custom scripts
        Index.initCalendar(); // init index page's custom scripts
        Index.initCharts(); // init index page's custom scripts
        Index.initChat();
        Index.initMiniCharts();
        Index.initPeityElements();
        Index.initKnowElements();
        Index.initDashboardDaterange();
        Tasks.initDashboardWidget();
    });
</script>
