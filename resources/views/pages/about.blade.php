<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

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
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li onclick="$('#modal1').modal()"><a href="#">Acerca De...</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="https://dummyimage.com/1600x700/000/fff" alt="space1">
                            <div class="carousel-caption">
                                camarena
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://dummyimage.com/1600x700/000/fff" alt="space2">
                            <div class="carousel-caption">
                                camarena
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://dummyimage.com/1600x700/000/fff" alt="space3">
                            <div class="carousel-caption">
                                camarena
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://dummyimage.com/1600x700/000/fff" alt="space4">
                            <div class="carousel-caption">
                                camarena
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://dummyimage.com/1600x700/000/fff" alt="space5">
                            <div class="carousel-caption">
                                camarena
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://dummyimage.com/1600x700/000/fff" alt="space6">
                            <div class="carousel-caption">
                                camarena
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://dummyimage.com/1600x700/000/fff" alt="space7">
                            <div class="carousel-caption">
                                camarena
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            @for ($i = 0; $i < $cant; $i++)

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Panel heading without title</div>
                    <div class="panel-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolore omnis itaque vel enim, perspiciatis hic tempora aliquid totam quod, facere accusamus sunt nihil dolorem, dolores, et. Cum, impedit quo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quo ex dolorem, deleniti odio explicabo praesentium voluptatem, voluptates aspernatur quibusdam nostrum sapiente, accusantium. Quasi accusantium atque veniam reiciendis beatae ex.
                        </p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="modal1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolore omnis itaque vel enim, perspiciatis hic tempora aliquid totam quod, facere accusamus sunt nihil dolorem, dolores, et. Cum, impedit quo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quo ex dolorem, deleniti odio explicabo praesentium voluptatem, voluptates aspernatur quibusdam nostrum sapiente, accusantium. Quasi accusantium atque veniam reiciendis beatae ex.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <footer style="background:#222222; padding:100px 0px; color:white;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repellendus libero voluptatum, et corporis! Dolorem repudiandae, autem ab! Ea delectus quo cum ipsam rem optio, architecto nulla porro deleniti sapiente.
                </div>
                <div class="col-md-4">
                    <img class="img-responsive" src="https://dummyimage.com/1600x700/000/fff" alt="">
                </div>
                <div class="col-md-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/U8wb_XsJqkM" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
