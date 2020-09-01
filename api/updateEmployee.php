<?php 

require_once('../dao/Employee.php');
$employee = new Employee();
$name = $_POST['name'];
$status = $_POST['status'];
$id = $_POST['id'];

$result = $employee->update_employee($id, $name, $status);

if ($result === TRUE) {
    $response = (object) array('status' => 200, 'message' => 'Empleado editado con exito');
}else{
    $response = (object) array('status' => 400, 'message' => 'Error de servidor');
}
echo(json_encode($response));

?>