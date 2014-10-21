var app = angular.module("app", []);

app.config(function($routeProvider)
{

    $routeProvider.when("/matriculate/index",
        {

            controller: "homeController",
            templateUrl: "/matriculate/index"

        })

});/*defining the application*/

/*app configuration added here*/
app.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('{[');
    $interpolateProvider.endSymbol(']}');
});
