require('./bootstrap');
require('angular');

function changeUsername(){
    $(document).ready(function(){
        $("#myModal").on("show.bs.modal", function(event){
            // Get the button that triggered the modal
            var button = $(event.relatedTarget);

            // Extract value from the custom data-* attribute
            var titleData = button.data("title");
            $(this).find(".modal-title").text(titleData);
        });
    });

}



$('.modal');

var app= angular.module('FYP58451',[],
    ['$httpProvider',function ($httpProvider) {
    $httpProvider.defaults.headers.post['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr('content');
    }]);
    app.controller('AdminController',['$scope','$http',function ($scope,$http) {

    }]);

$scope.tasks  = [];
$scope.loadTask = function () {
$http.get('/admin/controluser').then(function success(e) {
$scope.tasks = e.data.tasks;
});
};
$scope.loadTask();
