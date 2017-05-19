app.controller('CateListController', function($scope, $http, API,$timeout){	
	var maxRecord = 20 	;
	$scope.maxRecord = maxRecord;
	 var getTotalCategories = function(){
	 	$http.get(API + 'adminsites/category/ajax/total').then(function successCallback (response){
	
		$scope.total = response.data /maxRecord +1 ;
		console.log(response.data);
		//return response.data;
		
		}  , function errorCallback(response) {
			console.log(response);
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  		}) ;
	 }
	
	var getListCategories = function (max, page){
		var url= API + 'guest-ajax/listcate/'+max+'/'+page;
		console.log(url);
		$http.get(url).then(function successCallback (response){
		//getTotalCategories();
		$scope.categories = response.data;
		$scope.page = page;
		console.log(response.data);
		}  , function errorCallback(response) {
			console.log(response);
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  		}) ;
		
	 };

	$scope.getCateList = function (){
		getListCategories(10,1);
	}


});