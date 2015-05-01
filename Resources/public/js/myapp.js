'use strict';


var myapp = angular.module('myApp' ,['ngRoute']);


myapp.config(['$routeProvider', '$locationProvider' , 
    function($routeProvider , $locationProvider){
        $routeProvider
        .when('/view1', {
                templateUrl : 'files/partial1.html',
                controller  : 'aboutController'
        })
        .when('/getcocktails', {
                templateUrl : 'files/partial2.html',
                controller  : 'getMsgController'
        });

        //$locationProvider.html5Mode(true);
    }
]);


myapp.controller('aboutController',function($scope){
    $scope.message = "This is about page <b>hi!</b>";
});


myapp.controller('getMsgController',function($scope){
    $scope.message = "message from abc ....";
});


/*
var getRoute = function(routeName){
        return Routing.generate(routeName,{},false).slice(1);
    }*/
