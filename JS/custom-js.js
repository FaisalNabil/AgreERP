<<<<<<< HEAD
$(document).ready(function(){
     $('#aboutCrops').click(function(event){
         event.preventDefault();

          var week = $("#week option:selected").val();
          var TextAreaValue = $("textarea#ValueAboutWeek").val();

          if (TextAreaValue.length > 0) {
             var tableRow = "<tr>"+ "<td>"+week+"</td>"+ "<td>"+TextAreaValue+"</td>"+"</tr>";
             $("#weekAndTask").append(tableRow); 
          }else{
          	alert("Please Add some value");
          }
           
     });
     
     var i = 0;
     // About Fertilizer
     $('#aboutFertilizer').click(function(event){
         event.preventDefault();

          var FertilizerName   = $("#FertilizerName").val();
          var FertilizerAmount = $("#FertilizerAmount").val();
          if(isNaN(FertilizerAmount)){
          	alert("Please insert amount of Fertilizer!");
          }else{
           
          	if(FertilizerName.length>0){
          		 i++;
          		var fertilizerTableRow = "<tr>"+ "<td>"+ i +"</td>"+ "<td>"+FertilizerName+"</td>"+ "<td>"+FertilizerAmount+"</td>"+"</tr>";
          		$("#Fertilizer").append(fertilizerTableRow); 
          	}
          }
          //var TextAreaValue = $("textarea#ValueAboutWeek").val();

          /*if (TextAreaValue.length > 0) {
             var tableRow = "<tr>"+ "<td>"+week+"</td>"+ "<td>"+TextAreaValue+"</td>"+"</tr>";
             $("#FertilizerNameAmount").append(tableRow); 
          }else{
          	alert("Please Add some value");
          }*/
           
     });
});
=======
var app = angular.module("myShoppingList", []); 
app.controller("myCtrl", function($scope) {
    $scope.products = [];
    $scope.addItem = function () {
        $scope.errortext = "";
        if (!$scope.addMe) {return;}
        if ($scope.products.indexOf($scope.addMe) == -1) {
            $scope.products.push($scope.addMe);
        } else {
            $scope.errortext = "The item is already in your shopping list.";
        }
    }
    $scope.removeItem = function (x) {
        $scope.errortext = "";    
        $scope.products.splice(x, 1);
    }
});

var appp = angular.module("myShoppingList2", []); 
appp.controller("myCtrl2", function($scope) {
    $scope.products = [];
    $scope.addItem = function () {
        $scope.errortext = "";
        if (!$scope.addMe) {return;}
        if ($scope.products.indexOf($scope.addMe) == -1) {
            $scope.products.push($scope.addMe);
        } else {
            $scope.errortext = "The item is already in your shopping list.";
        }
    }
    $scope.removeItem = function (x) {
        $scope.errortext = "";    
        $scope.products.splice(x, 1);
    }
});
angular.bootstrap(document.getElementById("App2"), ['myShoppingList2']);



/*$('input[type="checkbox"]').on('change', function(e){
   if(e.target.checked){
     $('#myModal').modal();
   }
});*/
>>>>>>> dde1e0981b89ea0e1f126c53988654f7ff010c37
 