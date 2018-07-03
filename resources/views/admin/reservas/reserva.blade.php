 @extends('admin.templates.main')



    @section('content')
    <!-- topbar starts -->
   <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('admin/administrador') }}"> <img alt="Charisma Logo" src="{{asset('plugins/bootstrap/img/logo.ico')}}" class="hidden-xs"/>
                <strong><p style="font-family: Times New Roman;">Panel Administrativo</p></strong></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
           
            <!-- theme selector ends -->

            {{-- <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                
            </ul> --}}

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        @include('admin.templates.nav')
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
    </ul>
</div>

{{-- <div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Form Elements</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="control-group">
                    <label class="control-label" for="selectError">Modern Select</label>

                    <div class="controls">
                        <select id="selectError" data-rel="chosen">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="selectError1">Multiple Select / Tags</label>

                    <div class="controls">
                        <select id="selectError1" multiple class="form-control" data-rel="chosen">
                            <option>Option 1</option>
                            <option selected>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="selectError2">Group Select</label>

                    <div class="controls">
                        <select data-placeholder="Your Favorite Football Team" id="selectError2" data-rel="chosen">
                            <option value=""></option>
                            <optgroup label="NFC EAST">
                                <option>Dallas Cowboys</option>
                                <option>New York Giants</option>
                                <option>Philadelphia Eagles</option>
                                <option>Washington Redskins</option>
                            </optgroup>
                            <optgroup label="NFC NORTH">
                                <option>Chicago Bears</option>
                                <option>Detroit Lions</option>
                                <option>Green Bay Packers</option>
                                <option>Minnesota Vikings</option>
                            </optgroup>
                            <optgroup label="NFC SOUTH">
                                <option>Atlanta Falcons</option>
                                <option>Carolina Panthers</option>
                                <option>New Orleans Saints</option>
                                <option>Tampa Bay Buccaneers</option>
                            </optgroup>
                            <optgroup label="NFC WEST">
                                <option>Arizona Cardinals</option>
                                <option>St. Louis Rams</option>
                                <option>San Francisco 49ers</option>
                                <option>Seattle Seahawks</option>
                            </optgroup>
                            <optgroup label="AFC EAST">
                                <option>Buffalo Bills</option>
                                <option>Miami Dolphins</option>
                                <option>New England Patriots</option>
                                <option>New York Jets</option>
                            </optgroup>
                            <optgroup label="AFC NORTH">
                                <option>Baltimore Ravens</option>
                                <option>Cincinnati Bengals</option>
                                <option>Cleveland Browns</option>
                                <option>Pittsburgh Steelers</option>
                            </optgroup>
                            <optgroup label="AFC SOUTH">
                                <option>Houston Texans</option>
                                <option>Indianapolis Colts</option>
                                <option>Jacksonville Jaguars</option>
                                <option>Tennessee Titans</option>
                            </optgroup>
                            <optgroup label="AFC WEST">
                                <option>Denver Broncos</option>
                                <option>Kansas City Chiefs</option>
                                <option>Oakland Raiders</option>
                                <option>San Diego Chargers</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <br>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Option one is this and that&mdash;be sure to include why it's great
                    </label>
                </div>
                <div class="checkbox disabled">
                    <label>
                        <input type="checkbox" value="" disabled>
                        Option two is disabled
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Option one is this and that&mdash;be sure to include why it's great
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Option two can be something else and selecting it will deselect option one
                    </label>
                </div>
                <div class="radio disabled">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                        Option three is disabled
                    </label>
                </div>

                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                </label>

                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                </label>

                <br>
                <br>
                <br>

                <div class="form-group has-success col-md-4">
                    <label class="control-label" for="inputSuccess1">Input with success</label>
                    <input type="text" class="form-control" id="inputSuccess1">
                </div>
                <div class="form-group has-warning col-md-4">
                    <label class="control-label" for="inputWarning1">Input with warning</label>
                    <input type="text" class="form-control" id="inputWarning1">
                </div>
                <div class="form-group has-error col-md-4">
                    <label class="control-label" for="inputError1">Input with error</label>
                    <input type="text" class="form-control" id="inputError1">
                </div>

                <form class="form-inline" role="form">
                    <div class="form-group has-success has-feedback">
                        <label class="control-label" for="inputSuccess4">Input with success</label>
                        <input type="text" class="form-control" id="inputSuccess4">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                </form>

                <br>
                <div class="input-group col-md-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row--> --}}

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Registro de Reservas</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    {{-- <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a> --}}
                </div>
            </div>


            

        


            <div class="box-content">
                <form role="form" method="post" action="{{url('admin/reservas/')}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                       
                        <label >FECHA DE LA RESERVA</label>
                        <input type="date" class="form-control" id="exampleInputEmail1"  name="datereserva">
                        

                    </div>

                    <div class="form-group">
                       
                        <label >HORA DE LA INICIO </label>
                        <input type="time" class="form-control" id="exampleInputEmail1"  name="horareserva">
                        

                    </div>

                    
                    <div class="control-group">
                    <label class="control-label" for="selectError2">CIU. ORIGEN</label>

                    <div class="controls">
                        <select data-placeholder="Ciudad de Origen" id="selectError2" data-rel="chosen" name="ciudadorigen">
                            <option value=""></option>
                            <optgroup label="">
                                <option value="cartagena">Cartagena</option>
                                <option value="barranquilla">Barranquilla</option>
                                <option value="santamarta">Santa Marta</option>
                                <option value="monteria">Monteria</option>
                                <option value="bogota">Bogota</option>
                                <option value="medellin">Medellin</option>
                            </optgroup>
                            
                        </select>
                    </div>
                </div>
                <br>

                <div class="control-group">
                    <label class="control-label" for="selectError2">CIU. DESTINO</label>

                    <div class="controls">
                        <select data-placeholder="Ciudad destion" id="selectError2" data-rel="chosen" name="ciudaddestino">
                            <option value=""></option>
                            <optgroup label="">
                                <option value="cartagena">Cartagena</option>
                                <option value="barranquilla">Barranquilla</option>
                                <option value="santamarta">Santa Marta</option>
                                <option value="monteria">Monteria</option>
                                <option value="bogota">Bogota</option>
                                <option value="medellin">Medellin</option>
                            </optgroup>
                            
                            
                        </select>
                    </div>
                </div>
                <br>
                <div class="control-group"  >
                    
                    <label class="control-label" for="selectError2">CONDUCTOR</label>

                    <div class="controls  ">
                        <select data-placeholder="Conductor" id="selectError2" data-rel="chosen" name="conductor1">
                            <option value=""></option>
                            <optgroup label="">
                                <option value="1">Daniel White</option>
                                <option value="2">Tilson Fernandez</option>
                                
                            </optgroup>
                            
                        </select>
                    

                        <label class="control-label" for="selectError2">VEHICULO</label>

                  
                        <select data-placeholder="Vehiculo" id="selectError2" data-rel="chosen" name="vehiculo1">
                            <option value=""></option>
                            <optgroup label="">
                                <option value="1">Zapatico</option>
                                <option value="2">Camioneta</option>
                                
                            </optgroup>
                            
                        </select>
                    </div>
                </div>




                <br>
                    
                    <div style="text-align: center;" >
                        <button type="submit" class="btn btn-default">Aceptar</button>
                    </div>
                </form>
                





            </div>
        </div>
    </div>
    <!--/span-->
    
    

</div><!--/row-->

<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-edit"></i> Reservas Registradas</h2>

                    <div class="box-icon">

                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                        {{-- <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a> --}}
                    </div>
                </div>
                <div class="box-content">
                <table class="table table-responsive">
                <thead>
                    <tr>
                      
                      <th scope="col">iD</th>
                      <th scope="col">Fecha</th>
                      <th scope="col">Hora (Inicio)</th>
                      <th scope="col">Origen</th>
                      <th scope="col">Destino</th>
                      <th scope="col">Conductor</th>
                      <th></th>
                      
                      
                    </tr>
              </thead>
            <tbody>    
                @foreach( $reservas as $reserva)
                    <tr>
                        
                        <td>{{ $reserva->id }}</td>
                        <td>{{ $reserva->fecha_inicio_servicio }}</td>
                        <td>{{ $reserva->hora_inicio_servicio }}</td>
                        <td>{{ $reserva->origen }}</td>
                        <td>{{ $reserva->destino }}</td>
                        <td>{{ $reserva->conductor_id }}</td>
                        <td> 
                             <a href="" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i></a>

                             <a href="" onclick="return confirm('¿Seguro que desea borrar a este usuario?')" class="btn btn-warning" ><i class="glyphicon glyphicon-pencil"></i>
                             </a>
                             <a href="" onclick="return confirm('¿Seguro que desea borrar a este usuario?')" class="btn btn-danger" ><i class="glyphicon glyphicon-trash"></i>
                             </a>
                        </td>
                        
                 
                        

                    </tr>

                @endforeach
                
            </tbody>
        </table>
                </div>
            </div>
        </div>
    </div>

    <!-- content ends -->
    <!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
   
    <!-- Ad ends -->
  
    <footer class="row">
            <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://www.daniel.wame.co" target="_blank">Daniel D. Perez</a></p>

            <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
        </footer>

   

    

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
