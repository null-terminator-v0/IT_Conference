function validationForm(){
    let x = document.forms["signupForm"]["firstname"]["lastname"]["profession"]["email"].value;
    if (x == ""){
        return (false);
    }
    return (true);
}

function modalToggle(){
    if(validationForm()){
        $('modal').show('show');
    }
}