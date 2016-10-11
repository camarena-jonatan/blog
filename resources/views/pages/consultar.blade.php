@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Consultar</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
    <style>
    .west2 {
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
<?php
    $conexion =  mysqli_connect('localhost','root','camarena','Agenda') or die ("Error en la conexion");

    // forma simplificada
    $resultado = mysqli_query($conexion,'SELECT * FROM agendas');

    header ('Content-type: text/xml');
    echo mysqli_XML($resultado);
    function mysqli_XML($resultado, $nombreDoc='resultados', $nombreItem='item') {
    $campo = array();
   
   // llenamos el array de nombres de campos
   for ($i=0; $i<mysqli_num_fields($resultado); $i++)
      $campo[$i] = mysql_field_name($resultado, $i);
   
   // creamos el documento XML   
   $dom = new DOMDocument('1.0', 'UTF-8');
   $doc = $dom->appendChild($dom->createElement($nombreDoc));
   
   // recorremos el resultado
   for ($i=0; $i<mysqli_num_rows($resultado); $i++) {
      
      // creamos el item
      $nodo = $doc->appendChild($dom->createElement($nombreItem));
      
      // agregamos los campos que corresponden
      for ($b=0; $b<count($campo); $b++) {
         $campoTexto = $nodo->appendChild($dom->createElement($campo[$b]));
         $campoTexto->appendChild($dom->createTextNode(mysqli_result($resultado, $i, $b)));
      }
   }
   
   // retornamos el archivo XML como cadena de texto
   $dom->formatOutput = true; 
   return $dom->saveXML();    
}      

?>

    <body style="margin-top:75px;">
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
        <div class="container" class="west2">
            <div class=" row ">
                <div class="col-md-12 ">
                    <div class="flex-center position-ref full-height">
                        <div class="content ">
                            <div class="title m-b-md ">
                                Consultar
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div id="chart-div"></div>
            {!! $lava->render('DonutChart', 'IMDB', 'chart-div') !!}
        </div>
        </div>
        <div id="pop-div" style="width:800px;border:1px solid black"></div>
        <div class="modal fade " tabindex="-1 " role="dialog " id="modal1">
            <div class="modal-dialog " role="document ">
                <div class="modal-content ">
                    <div class="modal-header ">
                        <button type="button " class="close " data-dismiss="modal" aria-label="Close "><span aria-hidden="true ">&times;</span></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body ">
                        <p>
                            Jonatan Omar Camarena Ortega 12400248
                        </p>
                    </div>
                    <div class="modal-footer ">
                        <button type="button " class="btn btn-default " data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <footer style="background:#222222; padding:100px 0px; color:white; margin-top:100px; ">
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
