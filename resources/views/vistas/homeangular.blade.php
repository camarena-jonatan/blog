@extends('layouts.master') @section('content')
<div class="container" ng-app="blog">
    <div class="row">
        <div class="col-md-6">
            <img src="https://dummyimage.com/600x300/000/fff" alt="space4" class="img-responsive">
        </div>
        <div class="col-md-6">
            <img src="https://dummyimage.com/600x300/000/fff" alt="space4" class="img-responsive">
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row " ng-repeat="blog in blogs">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>{[blog.title]}</h3></div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <img src="{[blog.image]}" alt="space4" class="img-responsive">
                        </div>
                        <div class="col-md-6">
                            <p>
                                {[blog.short ]}
                            </p>
                        </div>
                        <div style="margin-right:10px;" class=" panel-footer  pull-right">
                            <a href="#" class="btn btn-primary pull-right">Read More</a>
                            <button style="margin-right:10px;" class="btn btn-warning" ng-click="open(blog,$index)">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button style="margin-right:10px;" class="btn btn-danger" ng-click="trash($index)">
                                <i class="fa fa-close"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
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
<script type="text/ng-template" id="editblog">
    <div class="modal-header">
        <h3 class="modal-title" id="modal-title">Editar </h3>
    </div>
    <div class="modal-body" id="modal-body">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Title</span>
            <input type="text" class="form-control" placeholder="Title" aria-describedby="basic-addon1" ng-model="user.empleado">
        </div>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Short</span>
            <input type="text" class="form-control" placeholder="Short" aria-describedby="basic-addon1" ng-model="user.telefono">
        </div>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Long</span>
            <input type="text" class="form-control" placeholder="Long" aria-describedby="basic-addon1" ng-model="user.email">
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" type="button" ng-click="ok()">OK</button>
        <button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button>
    </div>
</script>
<script>
var injection = [
    '$scope',
    '$http',
    '$uibModal',
    controladorprincipal
]

angular.module('blog').controller('controladorprincipal', injection);

function controladorprincipal($scope, $http,$uibModal) {
    $scope.blogs = [{
        title: '1',
        short: 'shortdel1',
        long: 'longdel1',
    }, {
        title: '2',
        short: 'shortdel2',
        long: 'longdel2',
    }, {
        title: '3',
        short: 'shortdel3',
        long: 'longdel3',
    }, {
        title: '4',
        short: 'shortdel4',
        long: 'longdel4',
    }, {
        title: '5',
        short: 'shortdel5',
        long: 'longdel5',
    }, {
        title: '6',
        short: 'shortdel6',
        long: 'longdel6',
    }, ];

      $scope.open = function(blog, index) {
            var modalInstance = $uibModal.open({
                templateUrl: 'editblog',
                controller: 'modaleditblog',
                resolve: {
                    blog: function() {
                        return angular.copy(blog);
                    },
                    id: function() {
                        return 1;
                    }
                }
            });


            modalInstance.result.then(function(blog) {
                $scope.blogs[index] = blog;
            }, function() {
                // cancel
            });
        };


    $scope.trash = function(index) {
        $scope.blogs.splice(index, 1);
    }
}

 var injection = [
        '$scope',
        'blog',
        'id',
        '$uibModalInstance',
        modaleditblog   ];

    angular.module('blog').controller('modaleditblog', injection)

    function modaleditblog($scope, blog, id, $uibModalInstance) {
        $scope.blog = blog;
        $scope.id = id;

        $scope.ok = function() {
            $uibModalInstance.close($scope.blog);
        };

        $scope.cancel = function() {
            $uibModalInstance.dismiss({
                $value: 'cancel'
            });
        };


    }

    


</script>
@endsection
