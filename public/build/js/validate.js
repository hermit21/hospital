function Validate(){

}
Validate.prototype.validString = function( value, min, max) {
    if((String(value).trim()).lenght > min && (String(value).trim()).lenght < max) {
       return !(/[\\/&;]/.test(value));
    } else {
        return false;
    }

}
Validate.prototype.validNumber = function(value, dlugosc) {
    if((String(value).trim()).lenght == dlugosc) {
        return (/^[0-9]+$/.test(value));
    }
    else {
        return false;
    }
}
Validate.prototype.validEmail = function(value, min, max) {
    if( (String(value).trim()).length > min && (String(value).trim()).length < max ) {
        return (/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value));

    } else {
        return false;
    }
}
Validate.prototype.validPassword = function(password, min, repeat_password) {
    if( ( String(password).trim()).length > min) {
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
    if( (String(value).trim()).length > min && (String(value).trim()).length < max ) {
        return (/^\s*\S+(?:\s+\S+){2}/).test(value);
    }
    else {
        return false;
    }
}
Validate.prototype.validIdCard = function (value, dlugosc) {
    if((String(value).trim()).lenght == dlugosc) {
        return (/[^a-zA-Z0-9\-\/]/).test(value);
    }
    else {
        return false;
    }
}