<?php 

require_once('../dao/Employee.php');
$employee = new Employee();
$name = $_POST['name'];

$result = $employee->search_employee($name);

echo(json_encode($result));

?>