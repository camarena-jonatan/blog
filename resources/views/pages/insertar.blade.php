<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Insertar</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <style>
    .west {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 40px;
        margin: 0;
    }
    
    .full-height {
        height: 40px;
    }
    
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    
    .position-ref {
        position: relative;
    }
    
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }
    
    .content {
        text-align: center;
    }
    
    .title {
        font-size: 60px;
    }
    
    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    
    .m-b-md {
        margin-bottom: 30px;
    }
    </style>
</head>

<body style="margin-top:85px;">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li onclick="window.location='{{ url('consultar')}}'"><a>Consultar</a></li>
                    <li onclick="window.location='{{ url('insertar')}}'"><a>Insertar</a></li>
                    <li onclick="$('#modal1').modal()"><a href="#">Acerca De...</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container" class="west">
        <div class=" row">
            <div class="col-md-12">
                <div class="flex-center position-ref full-height">
                    <div class="content">
                        <div class="title m-b-md">
                            Insertar
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" row" style="margin-top:200px;>
            <div class=" col-md-12 ">
                <div class="flex-center position-ref full-height ">
                    <div class="content ">
                        <form id="form1 " action="/agenda/store" method="post">
                               {{ csrf_field() }}
                            <div class="form-group ">
                                    <div class="input-group ">
                                        <span class="input-group-addon " id="basic-addon1 ">Nombre</span>
                                        <input type="text " class="form-control " name="input1" id="input1"  aria-describedby="basic-addon1 ">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group ">
                                    <div class="input-group ">
                                        <span class="input-group-addon " id="basic-addon1 ">Apellido</span>
                                        <input type="text " class="form-control " name="input2" id="input2"  aria-describedby="basic-addon1 ">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group ">
                                    <div class="input-group ">
                                        <span class="input-group-addon " id="basic-addon1 ">Dirrecion</span>
                                        <input type="text " class="form-control " name="input3" id="input3"  aria-describedby="basic-addon1 ">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group ">
                                    <div class="input-group ">
                                        <span class="input-group-addon " id="basic-addon1 ">Telefono</span>
                                        <input type="text " class="form-control " name="input4" id="input4"  aria-describedby="basic-addon1 ">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group ">
                                    <div class="input-group ">
                                        <span class="input-group-addon " id="basic-addon1 ">Tipo</span>
                                        <input type="number" class="form-control " name="input5" id="input5"  aria-describedby="basic-addon1 ">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group ">
                                <button type="submit" class="btn btn-primary btn-block ">Insertar</button>
                                </div>
                                 
                            </div>
                    </form>
                </div>
                </div>
            </div>
            <div class="modal fade " tabindex="-1 " role="dialog " id="modal1 ">
                <div class="modal-dialog " role="document ">
                    <div class="modal-content ">
                        <div class="modal-header ">
                            <button type="button " class="close " data-dismiss="modal " aria-label="Close "><span aria-hidden="true ">&times;</span></button>
                            <h4 class="modal-title ">Modal title</h4>
                        </div>
                        <div class="modal-body ">
                            <p>
                                Jonatan Omar Camarena Ortega 12400248
                            </p>
                        </div>
                        <div class="modal-footer ">
                            <button type="button " class="btn btn-default " data-dismiss="modal ">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <footer  style="background:#222222; margin-top:500px; padding:100px 0px; color:white; " >
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-4 ">
                        </div>
                        <div class="col-md-4 ">
                        </div>
                        <div class="col-md-4 ">
                        </div>
                    </div>
                </div>
            </footer>
</body>

</html>
