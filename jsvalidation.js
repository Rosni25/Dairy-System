// form.addEventListener('submit', e => {
//     e.preventDefault();
//     validate();
// });

// const setError = (element, message) => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');

//     errorDisplay.innerText = message;
//     inputControl.classList.add('error');
//     inputControl.classList.remove('success')
// }

// const setSuccess = element => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');

//     errorDisplay.innerText = '';
//     inputControl.classList.add('success');
//     inputControl.classList.remove('error');
// };

// const isValidEmail = email => {
//     const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(String(email).toLowerCase());
// }

// const validate = () => {


// }

function submitForm() {
    //form = document.getElementById('form').value;
    username = document.getElementById('username').value;
    email = document.getElementById('uemail').value;
    number = document.getElementById('unumber').value;
    address = document.getElementById('uaddress').value;
    password = document.getElementById('upassword').value;
    password2 = document.getElementById('upassword2').value;
    pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/gm;
    emailpattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var le = email.lastIndexOf('@gmail.com');
    var ce = email.lastIndexOf('@yahoo.com');
    first = number.substring(0, 2);
    console.log(first);

    if (username === '') {
        //setError(username, 'username cannot be blank');
        document.getElementById('uspan').innerHTML = "Username is blank";
        return false;
    } else if (username.length <= 2) {
        // setError(username, 'username should more than 3 word');
        document.getElementById('uspan').innerHTML = "Username should be more than 3 word";
        return false;
    } else {
        document.getElementById('uspan').innerHTML = "";
        //setSuccess(username);
    }

    if (!email.match(emailpattern)) {
        document.getElementById('espan').innerHTML = "Email cannot be empty.";
        //setError(email, 'Email is required');
        return false;

        // } else if (!isValidEmail(email)) {
        //     // setError(email, 'Provide a valid email address');
        //     return false;
    } else if (le == -1 && ce == -1) {
        document.getElementById("espan").innerHTML = "must contain @gmail.com";
        return false;

    } else {
        document.getElementById("espan").innerHTML = "";
    }



    if (address === '') {

        document.getElementById('aspan').innerHTML = "Address is empty.";
        //  setError(address, 'address cannot be blank');
        return false;
    } else if (address.length <= 2) {
        document.getElementById('aspan').innerHTML = "It should be more than 3 word";
        // setError(address, 'address should more than 3 word');
        return false;
    } else if (isNaN(address) == false) {
        document.getElementById('aspan').innerHTML = "It should be text.";
        return false;
        //  setSuccess(address);

    } else {
        document.getElementById('aspan').innerHTML = "";
    }

    if (number == '') {
        document.getElementById('cspan').innerHTML = "It must not be empty";
        return false;
        // }else if(number.match(passwordpattern)){
        //     document.getElementById('cspan').innerHTML="It should start from 98 or 97";
        //     return false;

    } else if (first != "98" && first != "97") {
        document.getElementById('cspan').innerHTML = "Must start with 98or 97";
        return false;
    } else if (number.length == 9) {
        document.getElementById('cspan').innerHTML = "It should contain 10 digit.";
        return false;
    } else if (isNaN(number)) {
        document.getElementById('cspan').innerHTML = "It should be number.";
        return false;
    } else {
        document.getElementById('cspan').innerHTML = "";
    }


    if (!password.match(pattern)) {
        //  setError(password, 'Password is required');
        document.getElementById('pspan').innerHTML = "Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character";
        return false;
        // } else if (password.length < 8) {
        //     // setError(password, 'Password must be at least 8 character.')
        //     document.getElementById('pspan').innerHTML="Password must be at least 8 character. ";
        //     return false;
        // } else {
        //     // setSuccess(password);

    } else {
        document.getElementById('pspan').innerHTML = "";
    }

    if (password2 === '') {

        document.getElementById('rspan').innerHTML = "It must not be empty";
        // setError(password2, 'Please confirm your password');
        return false;

    } else if (password2 !== password) {
        // setError(password2, "Passwords doesn't match");
        // alert("Password does not match.");
        document.getElementById('rspan').innerHTML = "Password does not match.";
        return false;
    } else {
        document.getElementById('rspan').innerHTML = "";
        //  setSuccess(password2);       
    }
    // if(!le){
    //     alert("Invalid email.");
    //     return false;
    // }
    return true;
}