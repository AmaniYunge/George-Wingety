<!DOCTYPE html>
<!--
Wgety Data Management App
Version: 1.0.0
Author:  Amani Yunge
-->

<head>
    <title>
        Wgety - Dashboard
    </title>
    <link href="../stylesheets/css.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/hightop-font.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/hightop-font.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/bootstrap-editable.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/ladda-themeless.min.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/social-buttons.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/jquery.fileupload-ui.css" media="screen" rel="stylesheet" type="text/css" /><link href="../stylesheets/dropzone.css" media="screen" rel="stylesheet" type="text/css" /><link href="../stylesheets/nestable.css" media="screen" rel="stylesheet" type="text/css" /><link href="../stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/style.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" /><link href="../stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" /><link href="../stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" /><link href="../stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />

    {{ HTML::script('javascripts/jquery-1.10.2.min.js') }}
    {{ HTML::script('javascripts/jquery-ui.js') }}
    {{ HTML::script('javascripts/databaseEngine.js') }}
    {{ HTML::script('javascripts/bootstrap-switch.min.js') }}
    {{ HTML::script('javascripts/bootstrap-timepicker.js') }}
{{--{{ HTML::script('javascripts/custom.js') }}--}}
    {{ HTML::script('javascripts/datatable-editable.js') }}
    {{ HTML::script('javascripts/date.js') }}
    {{ HTML::script('javascripts/daterange-picker.js') }}
    {{ HTML::script('javascripts/dropzone.js') }}
    {{ HTML::script('javascripts/dropzone.js') }}
    {{ HTML::script('javascripts/excanvas.min.js') }}
    {{ HTML::script('javascripts/excanvas.min.js') }}
    {{ HTML::script('javascripts/fitvids.js') }}
    {{ HTML::script('javascripts/fullcalendar.min.js') }}
    {{ HTML::script('javascripts/gcal.js') }}
{{--{{ HTML::script('javascripts/isotope_extras.js') }}--}}
    {{ HTML::script('javascripts/jquery.bootstrap.wizard.js') }}
    {{ HTML::script('javascripts/jquery.dataTables.min.js') }}
    {{ HTML::script('javascripts/jquery.easy-pie-chart.js') }}
    {{ HTML::script('javascripts/jquery.fancybox.pack.js') }}
    {{ HTML::script('javascripts/jquery.inputmask.min.js') }}
{{--{{ HTML::script('javascripts/jquery.isotope.min.js') }}--}}
    {{ HTML::script('javascripts/jquery.mousewheel.js') }}
    {{ HTML::script('javascripts/jquery.nestable.js') }}
{{--{{ HTML::script('javascripts/jquery.prettyPhoto.js') }}--}}
    {{ HTML::script('javascripts/jquery.sparkline.min.js') }}
    {{ HTML::script('javascripts/jquery.validate.js') }}
    {{ HTML::script('javascripts/jquery.vmap.min.js') }}
    {{ HTML::script('javascripts/jquery.vmap.sampledata.js') }}
    {{ HTML::script('javascripts/jquery.vmap.world.js') }}
    {{ HTML::script('javascripts/ladda.min.js') }}
    {{ HTML::script('javascripts/mockjax.js') }}
    {{ HTML::script('javascripts/modernizr.custom.js') }}
{{--{{ HTML::script('javascripts/modernizr.custom.js') }}--}}
    {{ HTML::script('javascripts/moment.js') }}
    {{ HTML::script('javascripts/morris.min.js') }}
    {{ HTML::script('javascripts/raphael.min.js') }}
    {{ HTML::script('javascripts/select2.js') }}
    {{ HTML::script('javascripts/selectivizr-min.js') }}
    {{ HTML::script('javascripts/skycons.js') }}
    {{ HTML::script('javascripts/spin.min.js') }}
    {{ HTML::script('javascripts/styleswitcher.js') }}
    {{ HTML::script('javascripts/summernote.min.js') }}
    {{ HTML::script('javascripts/typeahead.js') }}
    {{ HTML::script('javascripts/wysiwyg.js') }}
{{--{{ HTML::script('javascripts/xeditable-demo.js') }}--}}
{{--{{ HTML::script('javascripts/xeditable-demo-mock.js') }}--}}
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
     <link href="../stylesheets/bootstrap.min.css" rel="stylesheet">
     <link href="../stylesheets/bootstrap-editable.css" rel="stylesheet">
     <link href="../stylesheets/bootstrap-switch.css" rel="stylesheet">
     <link href="../stylesheets/colorpicker.css" rel="stylesheet">
     <link href="../stylesheets/datatables.css" rel="stylesheet">
     <link href="../stylesheets/datepicker.css" rel="stylesheet">
     <link href="../stylesheets/daterange-picker.css" rel="stylesheet">
     <link href="../stylesheets/dropzone.css" rel="stylesheet">
     <link href="../stylesheets/font-awesome.min.css" rel="stylesheet">
     <link href="../stylesheets/fullcalendar.css" rel="stylesheet">
     <link href="../stylesheets/hightop-font.css" rel="stylesheet">
     <link href="../stylesheets/isotope.css" rel="stylesheet">
     <link href="../stylesheets/jquery.fancybox.css" rel="stylesheet">
     <link href="../stylesheets/jquery.fileupload-ui.css" rel="stylesheet">
     <link href="../stylesheets/ladda-themeless.min.css" rel="stylesheet">
     <link href="../stylesheets/morris.css" rel="stylesheet">
     <link href="../stylesheets/nestable.css" rel="stylesheet">
     <link href="../stylesheets/pygments.css" rel="stylesheet">
     <link href="../stylesheets/select2.css" rel="stylesheet">
     <link href="../stylesheets/social-buttons.css" rel="stylesheet">
     <link href="../stylesheets/style.css" rel="stylesheet">
     <link href="../stylesheets/summernote.css" rel="stylesheet">
     <link href="../stylesheets/timepicker.css" rel="stylesheet">
     <link href="../stylesheets/typeahead.css" rel="stylesheet">
     <link href="../stylesheets/wizard.css" rel="stylesheet">
     <link href="../stylesheets/color/green.css" rel="stylesheet">
     <link href="../stylesheets/color/gray.css" rel="stylesheet">
     <link href="../stylesheets/color/magenta.css" rel="stylesheet">
     <link href="../stylesheets/color/orange.css" rel="stylesheet">


    <!--Basic Scripts-->
    {{--<script src="../javascripts/jquery-2.0.3.min.js "></script>--}}
    <script src="../javascripts/bootstrap.min.js "></script>
    <script src="../javascripts/respond.js "></script>

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    {{--<script src="../javascripts/main.js "></script>--}}

</head>
<body class="page-header-fixed bg-1">
<div class="modal-shiftfix">
<!-- Navigation -->
@include('top')
<!-- End Navigation -->
@yield('contents')
</div>
<div class="style-selector">
    <div class="style-selector-container">
        <h2>
            Layout Style
        </h2>
        <select name="layout"><option value="fluid">Fluid</option><option value="boxed">Boxed</option></select>
        <h2>
            Navigation Style
        </h2>
        <select name="nav"><option value="top">Top</option><option value="left">Left</option></select>
        <h2>
            Color Options
        </h2>
        <ul class="color-options clearfix">
            <li>
                <a class="blue" href="javascript:chooseStyle('none', 30)"></a>
            </li>
            <li>
                <a class="green" href="javascript:chooseStyle('green-theme', 30)"></a>
            </li>
            <li>
                <a class="orange" href="javascript:chooseStyle('orange-theme', 30)"></a>
            </li>
            <li>
                <a class="magenta" href="javascript:chooseStyle('magenta-theme', 30)"></a>
            </li>
            <li>
                <a class="gray" href="javascript:chooseStyle('gray-theme', 30)"></a>
            </li>
        </ul>
        <h2>
            Background Patterns
        </h2>
        <ul class="pattern-options clearfix">
            <li>
                <a class="active" href="index.html#" id="bg-1"></a>
            </li>
            <li>
                <a href="index.html#" id="bg-2"></a>
            </li>
            <li>
                <a href="index.html#" id="bg-3"></a>
            </li>
            <li>
                <a href="index.html#" id="bg-4"></a>
            </li>
            <li>
                <a href="index.html#" id="bg-5"></a>
            </li>
        </ul>
        <div class="style-toggle closed">
            <span aria-hidden="true" class="hightop-gear"></span>
        </div>
    </div>
</div>



</body>

</html>