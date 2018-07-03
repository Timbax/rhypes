
@extends('admin.templates.main')

@section('content')
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>RHYPES LOGIN</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Ingresa con tu usuario y contraseña.
            </div>
            <form class="form-horizontal" action="{{url('admin/administrador')}}" method="get">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                    </div>
                    <div class="clearfix"></div>

                    <p class="center col-md-5">

                        <button type="submit" class="btn btn-primary">Login</button>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->
<script src="{{asset('plugins/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- library for cookie management -->
<script src="{{asset('plugins/bootstrap/js/jquery.cookie.js')}}"></script>
<!-- calender plugin -->
<script src='{{asset('plugins/bower_components/moment/min/moment.min.js')}}'></script>
<script src='{{asset('plugins/bower_components/fullcalendar/dist/fullcalendar.min.js')}}'></script>
<!-- data table plugin -->
<script src='{{asset('plugins/bootstrap/js/jquery.dataTables.min.js')}}'></script>

<!-- select or dropdown enhancer -->
<script src="{{asset('plugins/bower_components/chosen/chosen.jquery.min.js')}}"></script>
<!-- plugin for gallery image view -->
<script src="{{asset('plugins/bower_components/colorbox/jquery.colorbox-min.js')}}"></script>
<!-- notification plugin -->
<script src="{{asset('plugins/bootstrap/js/jquery.noty.js')}}"></script>
<!-- library for making tables responsive -->
<script src="{{asset('plugins/bower_components/responsive-tables/responsive-tables.js')}}"></script>
<!-- tour plugin -->
<script src="{{asset('plugins/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js')}}"></script>
<!-- star rating plugin -->
<script src="{{asset('plugins/bootstrap/js/jquery.raty.min.js')}}"></script>
<!-- for iOS style toggle switch -->
<script src="{{asset('plugins/bootstrap/js/jquery.iphone.toggle.js')}}"></script>
<!-- autogrowing textarea plugin -->
<script src="{{asset('plugins/bootstrap/js/jquery.autogrow-textarea.js')}}"></script>
<!-- multiple file upload plugin -->
<script src="{{asset('plugins/bootstrap/js/jquery.uploadify-3.1.min.js')}}"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="{{asset('plugins/bootstrap/js/jquery.history.js')}}"></script>
<!-- application script for Charisma demo -->
<script src="{{asset('plugins/bootstrap/js/charisma.js')}}"></script>


@endsection