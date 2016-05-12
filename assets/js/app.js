var myApp = angular.module('App', ['ngResource']);

myApp.controller('mainController', ['$scope', '$log', '$resource', 'myService', function($scope, $log, $resource, myService) {

    function getTime() {
        $('h5.date-time').on('click', function() {
            var self = this;
            var time = self.innerHTML;
            var date = $(self).parent().parent().parent().parent().parent().parent().find('h4.header').html();
            var strippedDate = date.replace(/(<([^>]+)>)/ig,"");
            console.log(time);
            console.log(strippedDate);
            return time;
        });
    }

    $scope.time = getTime();
    console.log($scope.time);
    $scope.name = 'Test name';
    $scope.handle = '';
    console.log($resource);

    myService.set('asasas');

}]);

myApp.controller('addController', ['$scope', 'myService', function($scope, $log, myService) {
    $scope.date = '';
    $scope.time = '';
    $scope.log = 'empty';

    $scope.desiredLocation = myService.get();
}]);

myApp.factory('myService', function() {
    var savedData = {}
    function set(data) {
        savedData = data;
    }
    function get() {
        return savedData;
    }

    return {
        set: set,
        get: get
    }

});