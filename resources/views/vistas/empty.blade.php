@extends('layouts.master') @section('content')
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
<div class="container" class="west" style="margin-bottom:250px;">
    <div class=" row">
        <div class="col-md-12">
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">
                        No data in DB
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
