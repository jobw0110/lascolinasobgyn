var app = angular.module("articlesApp", []);
app.controller("articlesCtrl", function($scope, $http){
	$scope.search_message = "";

	$http.get("http://www.lascolinasobgyn.com/articles.php")
		.success(function(response){$scope.articles = response.data; console.log(response.data)})

	$scope.search = function(){
		//alert($scope.search_str);
		var search_str = $scope.search_str;
		$http.get("http://www.lascolinasobgyn.com/articles.php?search_str=" + search_str)
			.success(function(response){
				$scope.articles = response.data;
				console.log(response);
				console.log(response.data);

				if(response.data == null)
				{		
					$scope.search_message = "No articles found for the search entered.";
				}
				else
					$scope.search_message = "";


				//$("section li").next().slideDown();
				if($.trim(search_str) == '')
				{
					//alert('search string is empty');
					setTimeout(function(){$("section li").show();},50);
					$("section li").next().slideDown();
				}
				else
				{
					//$("section li").hide();
					$("section li").next().show();
					setTimeout(function(){
						$("section li").each(function(){
							if($.trim($(this).next().text()) == "")
								$(this).hide();
						});
					}, 50);
				}
				
			});
	} //end of search function
});