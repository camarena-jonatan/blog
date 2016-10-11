<!DOCTYPE html>
<html lang="en" ng-app="blog">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jquery    -->
    <script type="text/javascript" src="/vendor/jquery/dist/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- angular -->
    <script type="text/javascript" src="/vendor/angular/angular.min.js"></script>
    <!-- fontawesome -->
    <link href="/vendor/components-font-awesome/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/components-font-awesome/css/font-awesome.min.css">
    <!-- datatables -->
    <script src="/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="/vendor/datatables.net-dt/jquery.dataTables.min.css">
    <!-- datables angular  -->
    <script src="vendor/angular-datatables/dist/angular-datatables.min.js"></script>
    <link rel="stylesheet" href="vendor/angular-datatables/dist/css/angular-datatables.css">
    <!-- xeditable-->
    <script type="text/javascript" src="vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <link href="vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
    <!-- angular route -->
    <script src="vendor/angular-route/angular-route.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- title-->
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body style="padding-top:100px;" ng-controller="ControladorPrincipal">
    <!-- 
    include('commons.header') 
    yield('content') 
    include('commons.footer')
    -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table datatable="ng" dt-options="dtOptions" dt-column-defs="dtColumnDefs" class="row-border hover" table-condensed>
                    <thead>
                        <tr>
                            <th style="width:40%">
                                <div>
                                    Empleado
                                    <form editable-form name="nameform" onaftersave="saveColumn('name')" ng-show="nameform.$visible">
                                        <button type="submit" ng-disabled="nameform.$waiting" class="btn btn-primary">
                                            save
                                        </button>
                                        <button type="button" ng-disabled="nameform.$waiting" ng-click="nameform.$cancel()" class="btn btn-default">
                                            cancel
                                        </button>
                                    </form>
                                    <button class="btn btn-default" ng-show="!nameform.$visible" ng-click="nameform.$show()">
                                        edit
                                    </button>
                                </div>
                            </th>
                            <th style="width:40%">
                                <div>
                                    Telefono
                                    <form editable-form name="nameform" onaftersave="saveColumn('name')" ng-show="nameform.$visible">
                                        <button type="submit" ng-disabled="nameform.$waiting" class="btn btn-primary">
                                            save
                                        </button>
                                        <button type="button" ng-disabled="nameform.$waiting" ng-click="nameform.$cancel()" class="btn btn-default">
                                            cancel
                                        </button>
                                    </form>
                                    <button class="btn btn-default" ng-show="!nameform.$visible" ng-click="nameform.$show()">
                                        edit
                                    </button>
                                </div>
                            </th>
                            <th style="width:40%">
                                <div>
                                    Empleado
                                    <form editable-form name="nameform" onaftersave="saveColumn('name')" ng-show="nameform.$visible">
                                        <button type="submit" ng-disabled="nameform.$waiting" class="btn btn-primary">
                                            Email
                                        </button>
                                        <button type="button" ng-disabled="nameform.$waiting" ng-click="nameform.$cancel()" class="btn btn-default">
                                            cancel
                                        </button>
                                    </form>
                                    <button class="btn btn-default" ng-show="!nameform.$visible" ng-click="nameform.$show()">
                                        edit
                                    </button>
                                </div>
                            </th>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="user in users">
                            <td> {[user.empleado]}<span editable-text="user.empleado" e-name="empleado" e-form="nameform" onbeforesave="checkName($data)"></td>
                            <td>{[user.telefono]}</td>
                            <td>{[user.email]} </td>
                            <td>
                                <div>
                                    <a href="#" editable-text="user.empleado" e-label="Edit">{[ user.empleado ]}</a>
                                </div>
                                <div>
                                    <a href="#" editable-text="user.telefono" e-label="Edit">{[ user.telefono ]}</a>
                                </div>
                                <div>
                                    <a href="#" editable-text="user.email" e-label="Edit">{[ user.email ]}</a>
                                </div>
                            </td>
                            <td>
                                <!-- <button class="btn btn-warning" ng-click="open(user,$index)">
                                    <i class="fa fa-pencil"></i>
                                </button> -->
                                <button class="btn btn-danger" ng-click="trash($index)">
                                    <i class="fa fa-close"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/ng-template" id="editusuario">
        <div class="modal-header">
            <h3 class="modal-title" id="modal-title">{[user.empleado]} -{[id]} </h3>
        </div>
        <div class="modal-body" id="modal-body">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">empleado</span>
                                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" ng-model="user.empleado">
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">telefono</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" ng-model="user.telefono">
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">email</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" ng-model="user.email">
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="button" ng-click="ok()">OK</button>
            <button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button>
        </div>
        </script>
        <script>
        angular.module('blog', ['ui.bootstrap', 'datatables', 'xeditable', 'ngRoute']);



        angular.module('blog').config(['$interpolateProvider', function($interpolateProvider) {
            $interpolateProvider.startSymbol('{[').endSymbol(']}');
        }]);

        var injection = [
            '$scope',
            '$compile',
            '$http',
            '$q',
            '$uibModal',
            'DTOptionsBuilder',
            'DTColumnDefBuilder',
            ControladorPrincipal

        ];

        angular.module('blog').config(function($routeProvider, $httpProvider) {
            $httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
            $routeProvider
                .when('/', {
                    templateUrl: '/'

                });

        });
        angular.module('blog').controller('ControladorPrincipal', injection);

        function ControladorPrincipal($scope, $compile, $http, $q, uibModal, DTOptionsBuilder, DTColumnDefBuilder) {




            $scope.users = [{
                empleado: 'usuario 1',
                telefono: '3111231231',
                email: "usuario1@gmail.com"
            }, {
                empleado: 'usuario 2',
                telefono: '3111231232',
                email: "usuario2@gmail.com"
            }, {
                empleado: 'usuario 3',
                telefono: '3111231233',
                email: "usuario3@gmail.com"
            }, {
                empleado: 'usuario 4',
                telefono: '3111231234',
                email: "usuario4@gmail.com"
            }, {
                empleado: 'usuario 5',
                telefono: '3111231235',
                email: "usuario5@gmail.com"
            }, {
                empleado: 'usuario 6',
                telefono: '3111231236',
                email: "usuario6@gmail.com"
            }, {
                empleado: 'usuario 7',
                telefono: '3111231237',
                email: "usuario7@gmail.com"
            }, {
                empleado: 'usuario 8',
                telefono: '3111231238',
                email: "usuario8@gmail.com"
            }, {
                empleado: 'usuario 9',
                telefono: '3111231239',
                email: "usuario9@gmail.com"
            }, {
                empleado: 'usuario 10',
                telefono: '31112312310',
                email: "usuario10@gmail.com"
            }, {
                empleado: 'usuario 11',
                telefono: '31112312311',
                email: "usuario11@gmail.com"
            }, {
                empleado: 'usuario 12',
                telefono: '31112312312',
                email: "usuario12@gmail.com"
            }, ];


            $scope.dtOptions = DTOptionsBuilder.newOptions().withPaginationType('full_numbers').withDisplayLength(2).withOption('createdRow', function(row, data, dataIndex) {
                // Recompiling so we can bind Angular directive to the DT
                $compile(angular.element(row).contents())($scope);
            });
            $scope.dtColumnDefs = [
                DTColumnDefBuilder.newColumnDef(0),
                DTColumnDefBuilder.newColumnDef(1),
                DTColumnDefBuilder.newColumnDef(2).notSortable()

            ];

            $scope.open = function(user, index) {
                var modalInstance = $uibModal.open({
                    templateUrl: 'editusuario',
                    controller: 'modaleditusuario',
                    resolve: {
                        user: function() {
                            return angular.copy(user);
                        },
                        id: function() {
                            return 1;
                        }
                    }
                });


                modalInstance.result.then(function(user) {
                    $scope.users[index] = user;
                }, function() {
                    // cancel
                });
            };

            $scope.trash = function(index) {
                $scope.users.splice(index, 1)


            }


            $scope.adds = function() {

                var modalInstance = $uibModal.open({
                    templateUrl: 'editusuario',
                    controller: 'modaleditusuario',
                    resolve: {
                        user: function() {
                            return {};
                        },
                        id: function() {
                            return 1;
                        }

                    }
                });

                modalInstance.result.then(function(user) {
                    $scope.users.push(user);
                }, function() {
                    // cancel
                });
            }

        }

        var injection = [
            '$scope',
            'blog',
            'id',
            '$uibModalInstance',
            modaleditblog
        ];

        angular.module('blog').controller('modaleditblog', injection)



        \
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
</body>

</html>
