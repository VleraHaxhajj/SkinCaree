function validateAndRegister() {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();


if ( name && email && password){
    showAlert ('success' , 'Registration succesful');

}else {
    showAlert('error' , 'Please fill in all fields.');
}
}

function showAlert (type, message){
    if(type == 'success'){
        alert(message);
    }else if (type == 'error'){
        alert(message);
    }
}

document.getElementById('registerBtn').addEventListener('click',validateAndRegister);