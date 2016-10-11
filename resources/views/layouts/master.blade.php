<!DOCTYPE html>
<html lang="en" ng-app="blog">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS    -->
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css">
    <link href="/vendor/components-font-awesome/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/components-font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/vendor/datatables.net-dt/jquery.dataTables.min.css">
    <link rel="stylesheet" href="vendor/angular-datatables/dist/css/angular-datatables.css">
    <link href="vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
    <!-- JS -->
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/vendor/angular/angular.min.js"></script>
    <script src="vendor/angular-route/angular-route.min.js"></script>
    <script src="vendor/angular-datatables/dist/angular-datatables.min.js"></script>
    <script src="vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body style="padding-top:50px">
    @include('commons.header')
    <div ng-view> </div>
    @include('commons.footer')
    <script>
    angular.module('blog', ['ngRoute']);
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
            templateUrl: 'views/blog'
        })
        .when('/insertar2',{
            templateUrl: '/views/vistainsert'
        })
         .when('/new',{
            templateUrl: '/views/blog/insert'
        })
        .when('/buscar',{
            templateUrl: '/views/search'
        });
    }]);
    </script>
</body>

</html>
