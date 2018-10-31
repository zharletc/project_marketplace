var email = angular.module('form',[]);
email.controller('c_email', function ($scope) {
	$scope.va_email = function(){
		var email = $scope.email;
		var pattern = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
		if(pattern.test(email)){
			return "Email OK";
		}
		if(email != null ){
			return "Email Salah";
		}
	}
})