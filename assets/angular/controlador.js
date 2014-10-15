function BuscadorAngular($scope, $http) {

    $scope.listOfCustomers = null;

    $http.get('http://hospitalveterinariobenipeixcar.es/search/')
         .success(function (data) {
             $scope.listaBusqueda = data;
         })
}