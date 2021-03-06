app.controller('VideoController', function($scope ,$http,$location, API){
	var page = 1;
	$scope.page = page;
	$scope.end= true;
	var maxRecord = 3 	;
	$scope.maxRecord = maxRecord;
	$scope.cateid = "";
	$scope.status = "active";
	var getVideos = function(){
		var url = API+ "guest-ajax/list/"+maxRecord+"/"+page+"?cateid="+$scope.cateid+"&status="+$scope.status;
		console.log(url);
		$http.get(url).then(function successCallback (response){
		console.log(response);
		console.log(page);
		$scope.data =   response.data;
		if(response.data.length < maxRecord){
  			//page--;
  			$scope.end= true;
  			//$scope.message = "Hết dữ liệu vui lòng quay lại";
  		}else{
  			$scope.end= false;
  		}
		}  , function errorCallback(response) {
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  		}) ;
	}


	var getVideoRandom = function(){
		var url = API+'guest-ajax/randomvideo/6';
		console.log(url);
		$http.get(url).then(function successCallback (response){
		console.log(response);
		$scope.dataRandom =  response.data;
		if(response.data.length < 10){
  			
  		}
		}  , function errorCallback(response) {
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  		}) ;
	}
	var getVideoHot = function(){
		var url = API+'guest-ajax/hotvideo/3';
		console.log(url);
		$http.get(url).then(function successCallback (response){
		console.log(response);
		$scope.dataHot =  response.data;
		if(response.data.length < 10){
  			
  		}
		}  , function errorCallback(response) {
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  		}) ;
	}
	var getVideoNew = function(){
		var url = API+'guest-ajax/newvideo/3';
		console.log(url);
		$http.get(url).then(function successCallback (response){
		console.log(response);
		$scope.dataNew =  response.data;
		if(response.data.length < 10){
  			
  		}
		}  , function errorCallback(response) {
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  		}) ;
	}

	console.log(page);
//	getVideos();
//	getVideoRandom();
	$scope.getListVideo = function(cateid){
		$scope.cateid=cateid;
		getVideos();
	}
	$scope.getSideBarVideo = function(state){
		switch(state){
			case "new":
				getVideoNew();
			break;
			case "hot":
				getVideoHot();
			break;
			case "random":
				getVideoRandom();
			break;
		}
	}
	$scope.nextpage = function(state){

		//console.log("click");
		$scope.state = state;
		console.log($scope.end);
		switch (state){
			case "new":
				if(!$scope.end){
					page++;
					getVideos();	
					$scope.page = page;
				}
				
				break;
			case "hot":
				pagehot++;
				getAppHot(API + "listhot/"+ pagehot);
				break;
			case "rand":
				
				break;

		}	

		


	};
	$scope.previouspage = function(state){
		$scope.state = state;
		console.log(state);
		console.log(page);
		if(page >1){
			page--;
			switch (state){
			case "new":
			
				
					getVideos();	
					$scope.page = page;
				break;
			case "hot":
				pagehot++;
				getAppHot(API + "listhot/"+ pagehot);
				break;
			case "rand":
				getAppRandom();
				break;

		}
		}
		
	};
	$scope.searchfunc = function(){
		var key = $scope.keyvalue;
		var mySearchResult = angular.element( document.querySelector( '.search-result' ) );
		if(key.length >0){
			mySearchResult.css('display','block');
			$http.get(API+'listsearch/'+ key).then(function successCallback (response){
			console.log(response);
			
			if(response.data.length >0 ){
				$scope.dataSearch =  response.data;
			}
			else{
				$scope.dataSearch =  null;
				$scope.messageSearch = "Không có kết quả";
			}
			}  , function errorCallback(response) {
				// called asynchronously if an error occurs
				// or server returns response with an error status.
			}) ;
		}else{
			mySearchResult.css('display','none');
		}
		

	}

		


	
});
app.filter("dateFilter", function () {
    return function (stringDate) {
                    var dateOut = new Date(stringDate);
                    dateOut.setDate(dateOut.getDate() + 1);
                    return dateOut;
                };
});
app.filter('cut', function () {
        return function (value, wordwise, max, tail) {
            if (!value) return '';

            max = parseInt(max, 10);
            if (!max) return value;
            if (value.length <= max) return value;

            value = value.substr(0, max);
            if (wordwise) {
                var lastspace = value.lastIndexOf(' ');
                if (lastspace != -1) {
                  //Also remove . and , so its gives a cleaner result.
                  if (value.charAt(lastspace-1) == '.' || value.charAt(lastspace-1) == ',') {
                    lastspace = lastspace - 1;
                  }
                  value = value.substr(0, lastspace);
                }
            }

            return value + (tail || ' …');
        };
    });