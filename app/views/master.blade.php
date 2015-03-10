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
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/hightop-font.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/bootstrap-editable.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/ladda-themeless.min.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/social-buttons.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/jquery.fileupload-ui.css" media="screen" rel="stylesheet" type="text/css" /><link href="../stylesheets/dropzone.css" media="screen" rel="stylesheet" type="text/css" /><link href="../stylesheets/nestable.css" media="screen" rel="stylesheet" type="text/css" /><link href="../stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/style.css" media="all" rel="stylesheet" type="text/css" /><link href="../stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" /><link href="../stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" /><link href="../stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" /><link href="../stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" /><script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script><script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script><script src="javascripts/bootstrap.min.js" type="text/javascript"></script><script src="javascripts/raphael.min.js" type="text/javascript"></script><script src="javascripts/selectivizr-min.js" type="text/javascript"></script><script src="javascripts/jquery.mousewheel.js" type="text/javascript"></script><script src="javascripts/jquery.vmap.min.js" type="text/javascript"></script><script src="javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script><script src="javascripts/jquery.vmap.world.js" type="text/javascript"></script><script src="javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script><script src="javascripts/fullcalendar.min.js" type="text/javascript"></script><script src="javascripts/gcal.js" type="text/javascript"></script><script src="javascripts/jquery.dataTables.min.js" type="text/javascript"></script><script src="javascripts/datatable-editable.js" type="text/javascript"></script><script src="javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script><script src="javascripts/excanvas.min.js" type="text/javascript"></script><script src="javascripts/jquery.isotope.min.js" type="text/javascript"></script><script src="javascripts/isotope_extras.js" type="text/javascript"></script><script src="javascripts/modernizr.custom.js" type="text/javascript"></script><script src="javascripts/jquery.fancybox.pack.js" type="text/javascript"></script><script src="javascripts/select2.js" type="text/javascript"></script><script src="javascripts/styleswitcher.js" type="text/javascript"></script><script src="javascripts/wysiwyg.js" type="text/javascript"></script><script src="javascripts/typeahead.js" type="text/javascript"></script><script src="javascripts/summernote.min.js" type="text/javascript"></script><script src="javascripts/jquery.inputmask.min.js" type="text/javascript"></script><script src="javascripts/jquery.validate.js" type="text/javascript"></script><script src="javascripts/bootstrap-fileupload.js" type="text/javascript"></script><script src="javascripts/bootstrap-datepicker.js" type="text/javascript"></script><script src="javascripts/bootstrap-timepicker.js" type="text/javascript"></script><script src="javascripts/bootstrap-colorpicker.js" type="text/javascript"></script><script src="javascripts/bootstrap-switch.min.js" type="text/javascript"></script><script src="javascripts/typeahead.js" type="text/javascript"></script><script src="javascripts/spin.min.js" type="text/javascript"></script><script src="javascripts/ladda.min.js" type="text/javascript"></script><script src="javascripts/moment.js" type="text/javascript"></script><script src="javascripts/mockjax.js" type="text/javascript"></script><script src="javascripts/bootstrap-editable.min.js" type="text/javascript"></script><script src="javascripts/xeditable-demo-mock.js" type="text/javascript"></script><script src="javascripts/xeditable-demo.js" type="text/javascript"></script><script src="javascripts/address.js" type="text/javascript"></script><script src="javascripts/daterange-picker.js" type="text/javascript"></script><script src="javascripts/date.js" type="text/javascript"></script><script src="javascripts/morris.min.js" type="text/javascript"></script><script src="javascripts/skycons.js" type="text/javascript"></script><script src="javascripts/fitvids.js" type="text/javascript"></script><script src="javascripts/jquery.sparkline.min.js" type="text/javascript"></script><script src="javascripts/dropzone.js" type="text/javascript"></script><script src="javascripts/jquery.nestable.js" type="text/javascript"></script><script src="javascripts/main.js" type="text/javascript"></script><script src="javascripts/respond.js" type="text/javascript"></script>
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
    <script src="../javascripts/jquery-2.0.3.min.js "></script>
    <script src="../javascripts/bootstrap.min.js "></script>
    <script src="../javascripts/respond.js "></script>

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="../javascripts/main.js "></script>

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

<script src="../javascripts/jquery-1.10.2.min.js "></script>
<script src="../javascripts/jquery-ui.js"></script>
<script src="../javascripts/bootstrap-switch.min.js "></script>
<script src="../javascripts/bootstrap-timepicker.js "></script>
<script src="../javascripts/custom.js "></script>
<script src="../javascripts/datatable-editable.js "></script>
<script src="../javascripts/date.js "></script>
<script src="../javascripts/daterange-picker.js "></script>
<script src="../javascripts/dropzone.js "></script>
<script src="../javascripts/excanvas.min.js "></script>
<script src="../javascripts/fitvids.js "></script>
<script src="../javascripts/fullcalendar.min.js "></script>
<script src="../javascripts/gcal.js "></script>
<script src="../javascripts/isotope_extras.js "></script>
<script src="../javascripts/jquery.bootstrap.wizard.js "></script>
<script src="../javascripts/jquery.dataTables.min.js "></script>
<script src="../javascripts/jquery.easy-pie-chart.js "></script>
<script src="../javascripts/jquery.fancybox.pack.js "></script>
<script src="../javascripts/jquery.inputmask.min.js "></script>
<script src="../javascripts/jquery.isotope.min.js "></script>
<script src="../javascripts/jquery.mousewheel.js "></script>
<script src="../javascripts/jquery.nestable.js "></script>
<script src="../javascripts/jquery.prettyPhoto.js "></script>
<script src="../javascripts/jquery.sparkline.min.js "></script>
<script src="../javascripts/jquery.validate.js "></script>
<script src="../javascripts/jquery.vmap.min.js "></script>
<script src="../javascripts/jquery.vmap.sampledata.js "></script>
<script src="../javascripts/jquery.vmap.world.js "></script>
<script src="../javascripts/ladda.min.js "></script>
<script src="../javascripts/mockjax.js "></script>
<script src="../javascripts/modernizr.custom.js "></script>
<script src="../javascripts/modernizr.min.js "></script>
<script src="../javascripts/moment.js "></script>
<script src="../javascripts/morris.min.js "></script>
<script src="../javascripts/raphael.min.js "></script>
<script src="../javascripts/select2.js "></script>
<script src="../javascripts/selectivizr-min.js "></script>
<script src="../javascripts/skycons.js "></script>
<script src="../javascripts/spin.min.js "></script>
<script src="../javascripts/styleswitcher.js "></script>
<script src="../javascripts/summernote.min.js "></script>
<script src="../javascripts/typeahead.js "></script>
<script src="../javascripts/wysiwyg.js "></script>
<script src="../javascripts/xeditable-demo.js "></script>
<script src="../javascripts/xeditable-demo-mock.js "></script>

</body>

</html>