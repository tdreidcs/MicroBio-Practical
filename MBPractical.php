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
	function UnknownTest($scope) {

		AESFAEFEAFESFSE
		$scope.bacteria =  [
		{name: "staphylococcus aureus"},
		{name: "staphylococcus saprophyticus"},
		{name: "staphylococcus epidermidis"},
		{name: "streptococcus pneumoniae"},
		{name: "klebsiella pneumoniae"},
		{name: "escherichia coli"},
		{name: "enterobacter"}
		];

		$scope.tests = [
		];
		
		$scope.generatePossibilities = function() {
			bacteria_list = '';
			angular.forEach($scope.bacteria, function(value) {
				bacteria_list += value.name + ", ";
			});
			return bacteria_list;
		}; 
	}
    </script>
  </head>
	<div ng-app="myApp" ng-controller="UnknownTest" >
	  <h2>Welcome to the Micribiology Unknowns Tester Study Guide</h2>
	  <div >
	    <span>Possibilities: {{ generatePossibilities() }}</span>
	    <form ng-submit="conductTest()" ng-model="test">
	    	<select multiple>
	    	</select>
	    </form>
	  </div>
	</div>
</html>