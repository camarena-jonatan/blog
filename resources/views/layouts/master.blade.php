<!DOCTYPE html>
<html lang="en" ng-app="blog">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="/js/app.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.1.4/ui-bootstrap-tpls.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    <link href="bower_components/angular-xeditable/dist/css/xeditable.css" rel="stylesheet">
    <script src="bower_components/angular-xeditable/dist/js/xeditable.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- title-->
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body style="padding-top:100px;" ng-controller="controladorprincipal">
    <script>
    angular.module('blog', ['ui.bootstrap']);

    angular.module('blog').config(['$interpolateProvider', function($interpolateProvider) {
        $interpolateProvider.startSymbol('{[').endSymbol(']}');
    }]);
    </script>
    @include('commons.header') @yield('content') @include('commons.footer')
</body>

</html>
