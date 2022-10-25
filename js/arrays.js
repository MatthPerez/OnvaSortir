function file_get_contents(filename) {
  fetch(filename).then((resp) => resp.text()).then(function (data) {
    document.getElementById('response').innerHTML = data;
  });
}

function showEmployee() {
  let employee = document.getElementById('employee');
  let response = document.getElementById('response');
  response.innerHTML = employee.options[employee.selectedIndex].value;
}

function showCustomer() {
  let customer = document.getElementById('customer');
  let response = document.getElementById('response');
  response.innerHTML = customer.options[customer.selectedIndex].value;
}

function erase() {
  let response = document.getElementById('response');
  response.innerHTML = null;
}