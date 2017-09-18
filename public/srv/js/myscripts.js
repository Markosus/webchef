/// <reference path="angular.min.js" />

// What is a Module?
// You can think of a module as a container for the different parts of your app –
// controllers, services, filters, directives, etc.



//creating a module
var myApp = angular.module("myModule",[]);


// In AngularJS, a Controller is defined by a JavaScript constructor 
// function that is used to augment the AngularJS Scope.


// creating and registering a controller to a module
myApp.controller("myController", function($scope){

	$scope.message = "Hello World";
});



