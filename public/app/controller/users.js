app.controller('adminController',function($scope,$http,API_URL){
$http({
    method:'GET',
    url:API_URL + 'users'
}).then(function (response) {
    $scope.users = response.data.users;
    console.log(response);

},function (error) {
    console.log(error);
    alert('an error occured')

});
//modal
$scope.toggle=function (modalstate,id) {
    $scope.modalstate = modalstate;
    $scope.users = null;

    switch (modalstate) {
        case 'add':
            $scope.form_title = "Add new Users";
            break;
        default:
            break;

    }
    console.log(id);
    $("#myModal").modal('show');

};
    $scope.save = function (modalstate, id) {
        var url = API_URL + "users";
        var method = "POST";

        //append customer id to the URL if the form is in edit mode
        if (modalstate === 'edit') {
            url += "/" + id;

            method = "PUT";
        }

        $http({
            method: method,
            url: url,
            data: $.param($scope.customer),
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        }).then(function (response) {
            console.log(response);
            location.reload();
        }), (function (error) {
            console.log(error);
            alert('This is embarassing. An error has occurred. Please check the log for details');
        });
    };

    $scope.confirmDelete = function (id) {
        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {

            $http({
                method: 'DELETE',
                url: API_URL + 'users/' + id
            }).then(function (response) {
                console.log(response);
                location.reload();
            }, function (error) {
                console.log(error);
                alert('Unable to delete');
            });
        } else {
            return false;
        }
    }


});
