app.controller("TemaController", ["$scope", "$http", function ($scope, $http){

    getTema();

    $scope.showForm = function(){

    };

    $scope.guardarTema = function(){

        var url = "http://localhost/avances/public/api/maestros/"+ $scope.maestro_id +"/temas";
        var unidad = $scope.unidad;
        var tema = $scope.tema;
        var fecha = $scope.fecha;

        $http.post(url, {unidad: unidad, tema: tema, materia_id: $scope.materia_id, fecha: fecha })
            .then(function(response) {

                $scope.status = response.status;
                $scope.data = response.data;
                $scope.unidad = "";
                $scope.tema = "";
                $scope.fecha = "";

                getTema();

            }, function(response) {

                $scope.data = response.data || "Request failed";
                $scope.status = response.status;
                console.log($scope.data);
                alert($scope.data.unidad + " " +$scope.data.tema)

            });

    };

    $scope.guardarSubtema = function(){
        var url = "http://localhost/avances/public/api/maestros/"+ $scope.maestro_id +"/temas/subtemas";
        var tema_id = $scope.tema_id;
        var subtema = $scope.subtema;
        var fecha = $scope.fecha_dos;

        $http.post(url, {tema_id: tema_id, subtemas: subtema, fecha: fecha })
            .then(function(response) {

                $scope.status = response.status;
                $scope.data = response.data;
                $scope.subtema = "";
                $scope.fecha_dos = "";
                console.log($scope.data);

            }, function(response) {

                $scope.data = response.data || "Request failed";
                $scope.status = response.status;
                console.log($scope.data);
            });
    };

    function getTema(){
        var url = "http://localhost/avances/public/api/maestros/"+ $scope.maestro_id +"/temas";
        $http.get(url)
            .then(function(response) {
                $scope.temas = response.data;
                console.log($scope.temas);
            }, function(response){

            });
    }

    function getSubtema(){
        var url = "http://localhost/avances/public/api/maestros/"+ $scope.maestro_id +"/temas/subtemas";
        $http.get(url)
            .then(function(response) {
                $scope.temas = response.data;
                console.log($scope.temas);
            }, function(response){

            });
    }

}]);
