<!DOCTYPE html>
<html>
<head>
    <title>
        Wingety - Dashboard
    </title>
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/hightop-font.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/style.css" media="all" rel="stylesheet" type="text/css" /><script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script><script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script><script src="javascripts/bootstrap.min.js" type="text/javascript"></script><script src="javascripts/raphael.min.js" type="text/javascript"></script><script src="javascripts/jquery.mousewheel.js" type="text/javascript"></script><script src="javascripts/jquery.vmap.min.js" type="text/javascript"></script><script src="javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script><script src="javascripts/jquery.vmap.world.js" type="text/javascript"></script><script src="javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script><script src="javascripts/fullcalendar.min.js" type="text/javascript"></script><script src="javascripts/gcal.js" type="text/javascript"></script><script src="javascripts/jquery.dataTables.min.js" type="text/javascript"></script><script src="javascripts/datatable-editable.js" type="text/javascript"></script><script src="javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script><script src="javascripts/excanvas.min.js" type="text/javascript"></script><script src="javascripts/jquery.isotope.min.js" type="text/javascript"></script><script src="http://andrewreifman.com/se7en/javascripts/masonry.min.js" type="text/javascript"></script><script src="javascripts/modernizr.custom.js" type="text/javascript"></script><script src="javascripts/jquery.fancybox.pack.js" type="text/javascript"></script><script src="javascripts/select2.js" type="text/javascript"></script><script src="javascripts/styleswitcher.js" type="text/javascript"></script><script src="javascripts/wysiwyg.js" type="text/javascript"></script><script src="javascripts/jquery.inputmask.min.js" type="text/javascript"></script><script src="javascripts/jquery.validate.js" type="text/javascript"></script><script src="javascripts/bootstrap-fileupload.js" type="text/javascript"></script><script src="javascripts/bootstrap-datepicker.js" type="text/javascript"></script><script src="javascripts/bootstrap-timepicker.js" type="text/javascript"></script><script src="javascripts/bootstrap-colorpicker.js" type="text/javascript"></script><script src="javascripts/bootstrap-switch.min.js" type="text/javascript"></script><script src="javascripts/daterange-picker.js" type="text/javascript"></script><script src="javascripts/date.js" type="text/javascript"></script><script src="javascripts/morris.min.js" type="text/javascript"></script><script src="javascripts/skycons.js" type="text/javascript"></script><script src="javascripts/jquery.sparkline.min.js" type="text/javascript"></script><script src="javascripts/fitvids.js" type="text/javascript"></script><script src="javascripts/main.js" type="text/javascript"></script><script src="javascripts/respond.js" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">


    <link href="{{ asset('css/bootstrap.min.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-editable.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-switch.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/colorpicker.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/datatables.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/datepicker.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/daterange-picker.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/dropzone.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/fullcalendar.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/hightop-font.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/isotope.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/jquery.fancybox.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/jquery.fileupload-ui.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/ladda-themeless.min.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/morris.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/nestable.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/pygments.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/select2.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/social-buttons.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/style.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/summernote.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/timepicker.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/typeahead.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/wizard.css') }} " rel="stylesheet" />



</head>
<body class="login1">
<!-- Login Screen -->
<div class="login-wrapper">
    <div class="login-container">
        <h1>
            <a href="index.html">Wgety</a>
        </h1>
        <form role="form" method="post" action="{{ url('login')}}">
            <div class="form-group">
                <input class="form-control" placeholder="Username or Email" type="text">
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Password" type="text"><input type="submit" value="&#xf054;">
            </div>
            <div class="form-options clearfix">
                <a class="pull-right" href="login1.html#">Forgot password?</a>
                <div class="text-left">
                    <label class="checkbox"><input type="checkbox"><span>Remember me</span></label>
                </div>
            </div>
        </form>
        <div class="social-login clearfix">
            <a class="btn btn-primary pull-left facebook" href="{{ url('/')}}"><i class="fa fa-facebook"></i>Facebook login</a><a class="btn btn-primary pull-right twitter" href="index.html"><i class="fa fa-twitter"></i>Twitter login</a>
        </div>
        <p class="signup">
            Don't have an account yet?<a href="signup1.html">Sign up now</a>
        </p>
    </div>
</div>
<!-- End Login Screen -->
</body>
</html>
