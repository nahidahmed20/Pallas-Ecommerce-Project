// first name validated start
$('#firstName').keyup(function () {
    checkFirstName();
});

function checkFirstName()
{
    var firstName = $('#firstName').val();
    var regex = /^[a-zA-Z-. ]{3,10}$/;
    if (regex.test(firstName))
    {
        $('#firstNameError').text('');
        return true;
    }
    else
    {
        $('#firstNameError').text('First name field need only 2 to 10 character.');
        return false;
    }
}
// first name validated end

// last name validated start
$('#lastName').keyup(function () {
    checkLastName();
});

function checkLastName()
{
    var lastName = $('#lastName').val();
    var regex = /^[a-zA-Z-. ]{3,10}$/;
    if (regex.test(lastName))
    {
        $('#lastNameError').text('');
        return true;
    }
    else
    {
        $('#lastNameError').text('Last name field need only 2 to 10 character.');
        return false;
    }
}
// last name validated end

// email validated start
$('#email').keyup(function () {
    checkEmail();
});

function checkEmail()
{
    var email = $('#email').val();
    var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/ ;
    if (regex.test(email))
    {
        $('#emailError').text('');
        return true;
    }
    else
    {
        $('#emailError').text('Invalid Email Format.');
        return false;
    }
}
// email validated end

// Password validated start
$('#password').keyup(function () {
    checkPassword();
});

function checkPassword()
{
    var password = $('#password').val();
    var regex = /^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[a-zA-Z!#$%&? "])[a-zA-Z0-9!#$%&?]{8,100}$/;
    if (regex.test(password))
    {
        $('#passwordError').text('');
        return true;
    }
    else
    {
        $('#passwordError').text('Invalid Email Format.');
        return false;
    }
}
// Password validated end

$('#showHidePassword').click(function () {
    if($(this).is(':checked'))
    {
        $('#password').attr('type','text');
    }
    else
    {
        $('#password').attr('type','password');
    }
});


//Confirm Password validated start
$('#confirmPassword').keyup(function () {
    checkConfirmPassword();
});

function checkConfirmPassword()
{
    var password        = $('#password').val();
    var confirmPassword = $('#confirmPassword').val();
    if (password == confirmPassword)
    {
        $('#confirmPasswordError').text('');
        return true;
    }
    else
    {
        $('#confirmPasswordError').text('Password and Confirm password are not match');
        return false;
    }
}
//Confirm Password validated end

//Mobile validated start
$('#mobile').keyup(function () {
    checkMobile();
});

function checkMobile()
{
    var mobile        = $('#mobile').val();
    var regex =  /(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/;
    if (regex.test(mobile))
    {
        $('#mobileError').text('');
        return true;
    }
    else
    {
        $('#mobileError').text('Invalid Mobile Number');
        return false;
    }
}
//Mobile validated end



$('#brandRegForm').click(function () {
    checkFirstName();
    checkLastName();
    checkEmail();
    checkMobile();
    checkPassword();
    checkConfirmPassword();
    if(checkFirstName()==true && checkLastName()==true && checkEmail()==true && checkMobile()==true && checkPassword()==true && checkConfirmPassword()==true)
    {
        return true;
    }
    else
    {
        return false;
    }
});
