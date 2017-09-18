<!DOCTYPE html>
<html ng-app="myModule">
<head>
	<title></title>
<script type="text/javascript" src="{{ URL::to('/srv/js/angular.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('/srv/js/myscripts.js') }}"></script>
</head>
<body ng-controller="myController">

<?php $variable = "mark"; ?>
@{{ message }}


<script type="text/javascript">
	
</script>
</body>
</html>