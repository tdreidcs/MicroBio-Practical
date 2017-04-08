<html>
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.1.1/angular.js"></script>
    <script> /**
  	var myApp = angular.module('myApp', []);

	function GradeCalculator($scope) {

	  $scope.gradeInfo = [];

	  $scope.addGrade = function() {
	    $scope.gradeInfo.push({
	      grade: $scope.grade,
	      weight: $scope.weight
	    });
	    $scope.grade = '';
	    $scope.weight = '';
	  };

	  $scope.calculateGrade = function() {
	    average = 0;
	    angular.forEach($scope.gradeInfo, function(value) {
	      average += value.grade * value.weight / 100;
	    });
	    return average;
	  };

	  $scope.gradeLetter = function() {
	    if (average < 60) return 'F';
	    if (average < 70) return 'D';
	    if (average < 80) return 'C';
	    if (average < 90) return 'B';
	    if (average >= 90) return 'A, good job!';
	  };
	} **/
	var myApp = angular.module('myApp', []);
	function UnkownTest($scope) {
		$scope.gradeInfo = [];
	}	
    </script>
  </head>
	<div ng-app="myApp" ng-controller="UnknownTest">
	  <h2>Welcome to the Micribiology Unknowns Tester Study Guide</h2>
	  <div>
	    <span>{{ calculateGrade() }} out of 100. Your grade is: {{ gradeLetter() }} </span>
	    <ul class="unstyled">
	      <li ng-repeat="item in gradeInfo">
	        <span>Grade: {{item.grade}} Weight: {{item.weight}}%</span>
	      </li>
	    </ul>
	    <form ng-submit="addGrade()" ng-model="input" ng-change="grade=input;weight=input">
	      <input type="number" ng-model="grade" size="30" placeholder="add grade percentage here">
	      <input type="number" size="30" ng-model="weight" placeholder="add weight percentage here">
	      <input class="btn-primary" type="submit" value="add">
	    </form>
	  </div>
	</div>
</html>