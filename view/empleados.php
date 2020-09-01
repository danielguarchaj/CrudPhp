<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../static/css/styles.css">
</head>
<body>
    <div class="container text-center pt-5">
        <h1>Ingresar Nuevo Empleado</h1>
        <form class="text-left" name="employee">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nombre">
        </div>
        <div class="form-group">
            <label for="status">Estado</label>
            <select class="form-control" id="status" name="status">
                <option value="0">Inactivo</option>
                <option value="1">Activo</option>
            </select>
        </div>
        <button type="button" class="btn btn-primary" onclick="insertEmployee(employee)">Guardar</button>
        </form>
        <h1>LISTA DE EMPLEADOS</h1>
        <form class="text-left" name="search">
            <div class="form-group">
                <input class="form-control form-control-sm" type="text" placeholder="Buscar Empleado" name="parameter" id="parameter">
            </div>
        </form>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody id="tbodyEmployees">
            </tbody>
        </table>
    </div>
    <div class="modal fade" tabindex="-1" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Datos del empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="text-left" name="employeeUpdate">
                    <div class="form-group">
                        <label for="nameUpdate">Nombre</label>
                        <input type="text" class="form-control" id="nameUpdate" name="name" aria-describedby="nombre">
                    </div>
                    <div class="form-group">
                        <label for="statusUpdate">Estado</label>
                        <select class="form-control" id="statusUpdate" name="status">
                            <option value="0">Inactivo</option>
                            <option value="1">Activo</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-warning" onclick="updateEmployee(employeeUpdate)">Guardar Cambios</button>
                <button type="button" class="btn btn-danger" onclick="deleteEmployee()">Eliminar</button>
            </div>
            </div>
        </div>
    </div>
    <script src="../static/js/empleados.js"></script>
</body>
</html>