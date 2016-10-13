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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body style="padding-top:50px">
    @include('commons.header')
    <div ng-view> </div>
    @include('commons.footer')
    <script>
    angular.module('blog', ['ngRoute', 'ngDragDrop', 'ngDropzone']);
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
                templateUrl: '/views/search',
                controller: 'controladorprincipal'
            });
    }]);
    var injection = [
        '$scope',
        '$http',
        '$location',
        '$timeout',
        '$log',
        controladorprincipal
    ];

    angular.module('blog').controller('controladorprincipal', injection);

    function controladorprincipal($scope, $http, $location, $timeout, $log) {
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

        $scope.upload = function(){

        }

    }
    </script>
</body>

</html>
