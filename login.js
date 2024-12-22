function validateLogin () {
    const email = document.querySelector('input[type="text"]').value.trim();
    const password = document.querySelector('input[type="password"]').value.trim();

    if(email && password){
        showAlert('success', 'Login successful');
    }else{
        showAlert('error', 'Please fill in all fields,');
    }
}

function showAlert (type, message){
    if(type === 'success'){
        alert(message);
    }else if (type === 'error'){
        alert(message);
    }
}

document.querySelector('.buton').addEventListener('click',validateLogin);
