
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
<div class="container" class="west" style=" margin-top:100px; margin-bottom:250px;">
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
    <div class="container">
        <div class=" row" style="margin-top:150px;>
            <div class=" col-md-12">
                <div class="flex-center position-ref full-height">
                    <div class="content">
                        <form id="form2" action="/blog/insert" method="post">
                               {{ csrf_field() }}
                            <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Title</span>
                                        <input type="text" class="form-control" name="inputa" id="inputa"  aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Long</span>
                                        <input type="text" class="form-control" name="inputb" id="inputb"  aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Short</span>
                                        <input type="text" class="form-control" name="inputc" id="inputc"  aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Image</span>
                                        <input type="text" class="form-control" name="inputd" id="inputd"  aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Insertar</button>
                                </div>
                            </div>
                    </form>
                </div>
                </div>
            </div>
        
  </div>  

