<!DOCTYPE html>
<html lang="en" ng-app="blog">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS    -->
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/components-font-awesome/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/components-font-awresome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="vendor/datatables.net-dt/jquery.dataTables.min.css">
    <link rel="stylesheet" href="vendor/angular-datatables/dist/css/angular-datatables.css">
    <link rel="stylesheet" href="vendor/angular-bootstrap/ui-bootstrap-csp.css">
    <link rel="stylesheet" href="vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css">
    <link rel="stylesheet" href="vendor/dropzone/dist/min/dropzone.min.css">
    <!-- JS -->
    <script src="vendor/jquery/dist/jquery.min.js"></script>
    <script src="vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendor/angular/angular.min.js"></script>
    <script src="vendor/angular-route/angular-route.min.js"></script>
    <script src="vendor/angular-datatables/dist/angular-datatables.min.js"></script>
    <script src="vendor/angular-datatables/dist/angular-datatables.min.js"></script>
    <script src="vendor/angular-dragdrop/src/angular-dragdrop.min.js"></script>
    <script src="vendor/dropzone/dist/min/dropzone.min.js"></script>
    <script src="vendor/angular-dropzone/lib/angular-dropzone.js"></script>
    <script src="vendor/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
    .dropzone {
        border: 2px dashed #CCC;
    }
    </style>
</head>

<body style="padding-top:50px">
    @include('commons.header')
    <div ng-view> </div>
    @include('commons.footer')
    <script>
    angular.module('blog', ['ngRoute', 'ngDragDrop', 'ngDropzone', 'datatables', 'ui.bootstrap']);
    angular.module('blog').config(['$interpolateProvider', '$routeProvider', '$locationProvider', '$httpProvider', function($interpolateProvider, $routeProvider, $locationProvider, $httpProvider) {
        $locationProvider.html5Mode({
            enabled: true,
            requireBase: false
        });
        $httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
        $interpolateProvider.startSymbol('{[').endSymbol(']}');
        $routeProvider.when('/', {
                templateUrl: '/views/'
            })
            .when('/articulo', {
                templateUrl: 'views/blog',
                controller: 'controladorprincipal'
            })
            .when('/insertar2', {
                templateUrl: 'views/vistainsert',
                controller: 'controladorprincipal'
            })
            .when('/buscar', {
                templateUrl: 'views/search',
                controller: 'controladorprincipal'
            }).when('/todb',{
                templateUrl: 'views/excel',
                controller: 'controladorprincipal'

            });
    }]);
    var injection = [
        '$scope',
        '$http',
        '$location',
        '$timeout',
        '$log',
        '$q',
        'DTOptionsBuilder',
        'DTColumnDefBuilder',
        '$uibModal',
        controladorprincipal
    ];

    angular.module('blog').controller('controladorprincipal', injection);

    function controladorprincipal($scope, $http, $location, $timeout, $log, $q, DTOptionsBuilder, DTColumnDefBuilder, $uibModal) {
        $scope.myExcel = {
            excel: ''
        };
        $scope.myForm = {
            input1: 'title',
            input2: 'long',
            input3: 'short',
            input4: 'image'
        };

        $scope.submitForm = function() {
            $http.post('views/blog/insert', $scope.myForm).success(function() {
                window.location.reload();
            });
        }

        $scope.getExcel = function() {
            $http.post('blog/excel', $scope.myExcel).success(function(data) {
                if (data.status == "excelready") {
                    $scope.west = data.info;
                } else {

                }
            });
        }


        $scope.list4 = [{
            'title': 'north',
            'drag': true
        }, {
            'title': 'south',
            'drag': true
        }, {
            'title': 'east',
            'drag': true
        }, {
            'title': 'west',
            'drag': true
        }];

        $scope.list5 = [{
            'title': 'up',
            'drag': true
        }, {
            'title': 'left',
            'drag': true
        }, {
            'title': 'right',
            'drag': true
        }, {
            'title': 'down',
            'drag': true
        }];

        $scope.dzAddedFile = function(file) {
            $log.log(file);
        };

        $scope.dzError = function(file, errorMessage) {
            $log.log(errorMessage);
        };
        $scope.terminolacarga = function(file, response, meta, info) {

            console.log(file, response, meta, info);



            $scope.open(response.info);


        }
        $scope.dropzoneConfig2 = {
            options: { // passed into the Dropzone constructor
                url: '/images',
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: .5, // MB
                acceptedFiles: 'xlsx/xls/ods',
                parallelUploads: 3,
                maxFileSize: 30
            }
        }

        $scope.dropzoneConfig = {
            options: { // passed into the Dropzone constructor
                url: '/images',
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: .5, // MB
                acceptedFiles: 'image/jpeg,image/png,image/gif',
                parallelUploads: 3,
                maxFileSize: 30
            }
        };



        $scope.dtOptions = DTOptionsBuilder.newOptions().withPaginationType('full_numbers').withDisplayLength(2).withOption('createdRow', function(row, data, dataIndex) {
            // Recompiling so we can bind Angular directive to the DT
            $compile(angular.element(row).contents())($scope);
        });
        $scope.dtColumnDefs = [
            DTColumnDefBuilder.newColumnDef(0),
            DTColumnDefBuilder.newColumnDef(1),
            DTColumnDefBuilder.newColumnDef(2)

        ];

        $scope.open = function(blogs) {
            var modalInstance = $uibModal.open({
                templateUrl: 'editblog',
                controller: 'modaleditblog',
                size:'lg',
                resolve: {
                    blogs: function() {
                        return angular.copy(blogs);
                    },
                }
            });


            modalInstance.result.then(function(blogs) {
                
            }, function() {
                // cancel
            });
        };


        $scope.trash = function(index) {

        }
    }

    var injection = [
        '$scope',
        'blogs',
        '$uibModalInstance',
        modaleditblog
    ];

    angular.module('blog').controller('modaleditblog', injection)

    function modaleditblog($scope, blogs, $uibModalInstance) {
        $scope.blogs = blogs;

        $scope.ok = function() {
            $uibModalInstance.close($scope.blogs);
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
