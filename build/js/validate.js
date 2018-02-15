function Validate(){

}
Validate.prototype.validString = function(value, min, max) {
    if(value.trim() > min && value.trim() < max) {
       return !(/[\\/&;]/.test(value));
    } else {
        return false;
    }

}
Validate.prototype.validNumber = function(value, dlugosc) {
    if(value.trim() == dlugosc) {
        return (/^[0-9]+$/.test(value));
    }
    else {
        return false;
    }
}
Validate.prototype.validEmail = function(value, min, max) {
    if( (value.trim()).length > min && (value.trim()).length < max ) {
        return (/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value));

    } else {
        return false;
    }
}
Validate.prototype.validPassword = function(password, min, repeat_password) {
    if(password.trim() > min) {
        if(password == repeat_password) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
Validate.prototype.validAddress = function(value, min, max) {

}