const baseUrl = 'http://localhost:8080/CrudPhp/api/'
let selectedEmployee = 0

const toggleModal = () => {
    $('#modal').modal('toggle')
}

const renderEmployees = employees => {
    document.getElementById('tbodyEmployees').innerHTML = employees.reduce( 
        (employeesHtml, employee) => employeesHtml 
            += `<tr class="clickable-row" onclick="openEmployee(${employee.id}, '${employee.name}', ${employee.status})"><td>${employee.id}</td><td>${employee.name}</td><td>${employee.status == "1" ? 'Activo' : 'Inactivo'}</td></tr>`, 
    '' )
}

const openEmployee = (id, name, status) => {
    document.getElementById('nameUpdate').value = name
    document.getElementById('statusUpdate').value = status
    selectedEmployee = id
    toggleModal()
}

const deleteEmployee = employee => {
    $.ajax({
        url: baseUrl + 'deleteEmployee.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            id: selectedEmployee
        },
        success: function(response){
            alert(response.message)
            if (response.status === 200) {
                searchEmployee()
                toggleModal()
            }
        },
        error: function(error) {
            alert(error.responseText)
        }
    });
}

const updateEmployee = employee => {
    $.ajax({
        url: baseUrl + 'updateEmployee.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            name: employee.name.value,
            status: employee.status.value,
            id: selectedEmployee
        },
        success: function(response){
            alert(response.message)
            if (response.status === 200) {
                searchEmployee()
                toggleModal()
            }
        },
        error: function(error) {
            alert(error.responseText)
        }
    });
}

const insertEmployee = (employee) => {
    $.ajax({
        url: baseUrl + 'insertEmployee.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            name: employee.name.value,
            status: employee.status.value
        },
        success: function(response){
            alert(response.message)
            if (response.status === 200) {
                searchEmployee()
            }
        },
        error: function(error) {
            alert(error.responseText)
        }
    });
}

//setup before functions
var typingTimer;                //timer identifier
var doneTypingInterval = 500;  //time in ms, 0.5 second for example
var $searchParameter = $('#parameter');

//on keyup, start the countdown
$searchParameter.on('keyup', function () {
    clearTimeout(typingTimer);
    typingTimer = setTimeout(searchEmployee, doneTypingInterval);
});

//on keydown, clear the countdown 
$searchParameter.on('keydown', function () {
    clearTimeout(typingTimer);
});

//user is "finished typing," do something
function searchEmployee () {
    $.ajax({
        url: baseUrl + 'searchEmployee.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            name: $searchParameter.val(),
        },
        success: function(response){
            renderEmployees(response)
        },
        error: function(error) {
            alert(error.responseText)
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    searchEmployee()
})