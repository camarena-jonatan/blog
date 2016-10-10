@extends('layouts.master') @section('content')
<div class="container">
    <div class="row ">
        @foreach($blogs as $index => $blog)
        <?php $id= $blog->id; ?>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>{{$blog->title}}</h3></div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <img src="{{$blog->image}}" alt="space4" class="img-responsive">
                    </div>
                    <div class="col-md-6">
                        <p>
                            {{ $blog->short }}
                        </p>
                    </div>
                    <div class="panel-footer panel pull-right">
                       <a href="{{ url("solo/$id")}}" class="btn btn-primary pull-right">Interested in More</a>
                    </div>
                </div>
            </div>
        </div>
        @if(($index+1)%2==0)
        <div class="clearfix">
        </div>
        @endif @endforeach
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="modal1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>camarena</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
@endsection
