@extends('layouts.master') @section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>{{$blog->title}}</h3></div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <img src="{{$blog->image}}" alt="space4" class="img-responsive">
                    </div>
                    <div class="col-md-6">
                        <p>
                            {{ $blog->longs }}
                        </p>
                    </div>
                    <div class="panel-footer panel pull-right">
                     <a href="{{ url("blog")}}" class="btn btn-primary pull-right">More Articles</a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
