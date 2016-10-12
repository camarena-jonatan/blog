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
            <div class=" col-md-12 ">
                <div class="flex-center position-ref full-height ">
                    <div class="content ">
                        <form id="form2 " ng-submit="submitForm() " >
                               {{ csrf_field() }}
                            <div class="form-group ">
                                    <div class="input-group ">
                                        <span class="input-group-addon " id="basic-addon1 ">Title</span>
                                        <input type="text " class="form-control " name="input1 " id="input1 "  aria-describedby="basic-addon1 " ng-model="myForm.input1 " >
                                    </div>
                                </div>
                                <br>
                                <div class="form-group ">
                                    <div class="input-group ">
                                        <span class="input-group-addon " id="basic-addon1 ">Long</span>
                                        <input type="text " class="form-control " name="input2 " id="input2 "  aria-describedby="basic-addon1 " ng-model="myForm.input2 ">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group ">
                                    <div class="input-group ">
                                        <span class="input-group-addon " id="basic-addon1 ">Short</span>
                                        <input type="text " class="form-control " name="input3 " id="input3 "  aria-describedby="basic-addon1 " ng-model="myForm.input3 ">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group ">
                                    <div class="input-group ">
                                        <span class="input-group-addon " id="basic-addon1 ">Image</span>
                                        <input type="text " class="form-control " name="input4 " id="input4 "  aria-describedby="basic-addon1 " ng-model="myForm.input4 ">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group ">
                                <button type="submit " class="btn btn-primary btn-block ">Insertar</button>
                                </div>
                            </div>
                    </form>
                </div>
                </div>
            </div>    
  </div>

  

    <div class='contentWrapper ng-cloak'>
        <div class='content'>
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3" style='margin-left:10px;'>
                <div class="thumbnail" data-drop="true" ng-model='list4' data-jqyoui-options="optionsList4" jqyoui-droppable="{multiple:true}">
                  <div class="caption">
                    <div class="btn btn-info btn-draggable" ng-repeat="item in list4" ng-show="item.title" data-drag="{[item.drag]}" data-jqyoui-options="{revert: 'invalid'}" ng-model="list4" jqyoui-draggable="{index: {[$index]},animate:true}">{[item.title]}</div>
                  </div>
                </div>
              </li>
              <li class="span3" style='margin-left:10px;'>
                <div class="thumbnail" data-drop="true" ng-model='list5' data-jqyoui-options="{accept:'.btn-draggable:not([ng-model=list5])'}"  jqyoui-droppable="{multiple:true}">
                  <div class="caption">
                    <div class="btn btn-info btn-draggable" ng-repeat="item in list5" ng-show="item.title" data-drag="{[item.drag]}" data-jqyoui-options="{revert: 'invalid'}" ng-model="list5" jqyoui-draggable="{index: {[$index]},animate:true}">{[item.title]}</div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
    </div>
    