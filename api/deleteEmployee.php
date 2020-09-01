<?php 

require_once('../dao/Employee.php');
$employee = new Employee();
$id = $_POST['id'];

$result = $employee->delete_employee($id);

if ($result === TRUE) {
    $response = (object) array('status' => 200, 'message' => 'Empleado eliminado con exito');
}else{
    $response = (object) array('status' => 400, 'message' => 'Error de servidor');
}
echo(json_encode($response));

?>