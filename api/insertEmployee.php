<?php 

require_once('../dao/Employee.php');
$employee = new Employee();
$name = $_POST['name'];
$status = $_POST['status'];

$result = $employee->insert_employee($name, $status);

if ($result === TRUE) {
    $response = (object) array('status' => 200, 'message' => 'Empleado creado con exito');
}else{
    $response = (object) array('status' => 400, 'message' => 'Error de servidor');
}
echo(json_encode($response));

?>