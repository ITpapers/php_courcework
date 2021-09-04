$(document).ready(() => {
    
    let correctName = false;
    let correctLast = false;
    let correctAge = false; 
    let correctPhone = false;
    let correctEmail = false;
    let correctPass1 = false;
    let correctPass2 = false; 

    //Сценарий валидации:
    let regExpName = /^[a-zA-Z][a-zA-Z\-\. ]{1,45}$/;
    let regExpPhone = /^[0-9]{10}$/;
    let regExpEmail = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/;
    let regExpPassw = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[a-zA-Z0-9_\-\.]{8,}$/;

    //Проверка имени
    $('#name').blur(()=> {
        let nameValue = $('#name').val();
        ////console.log(`userName: ${nameValue}`);
        if(regExpName.test(nameValue)) {
            correctName = true;
            $('#name-error').html('');
            //console.log(`name-valid`);
        } else {
            //console.log(`name-failed`);
            correctName = false;
            $('#name-error').html('Name does not match the world pattern');
        }
    });

    //Проверка фамилии
    $('#lastname').blur(()=> {
        let lastValue = $('#lastname').val();
        //console.log(`userLastname: ${lastValue}`);
        if(regExpName.test(lastValue)) {
            correctLast = true;
            $('#lastname-error').html('');
            //console.log(`lastname-valid`);
        } else {
            //console.log(`lastname-failed`);
            correctLast = false;
            $('#lastname-error').html('Lastname does not match the world pattern');
        }
    });

    //Проверка возраста
    $('#age').blur(()=> {
        let ageValue = $('#age').val();
        //console.log(`userAge: ${ageValue}`);
        if(ageValue < 18 ) {
            correctAge = false;
            $('#age-error').html('You must be an adult!');
            //console.log(`age-failed`);
        } else if(ageValue > 99 ) {
            correctAge = false;
            $('#age-error').html('You must be under 100 years old!');
            //console.log(`age-failed`);
        } else {
            correctAge = true;
            $('#age-error').html('');
            //console.log(`age-valid`);
        }
    });

    //Проверка пароля-1
    $('#pass1').blur(()=> {
        let pass1Value = $('#pass1').val();
        //console.log(`userPass: ${pass1Value}`);
        if(regExpPassw.test(pass1Value)) {
            //console.log(`pass1-valid`);
            correctPass1 = true;
            $('#pass1-error').html('');
        } else {
            //console.log(`pass1-failed`);
            correctPass1 = false;
            $('#pass1-error').html('Password does not match the security pattern');
        }
    });

    //Проверка пароля-2
    $('#pass2').blur(()=> {
        let pass1Value = $('#pass1').val();
        let pass2Value = $('#pass2').val();
        //console.log(`userPass2: ${pass2Value}`);
        if(pass1Value === pass2Value) {
            //console.log(`pass2-valid`);
            correctPass2 = true;
            $('#pass2-error').html('');
        } else {
            //console.log(`pass2-failed`);
            correctPass2 = false;
            $('#pass2-error').html('Password mismatch');
        }
    });

    //Проверка email
    $('#email').blur(()=> {
        let emailValue = $('#email').val();
        //console.log(`userEmail: ${emailValue}`);
        if(regExpEmail.test(emailValue)) {
            //Проверка занятости email:
            //==========================
            $.ajax({
                type: "POST",
                url: "/php/car-rental/auth/ajax_check_email",
                data: "email=" + emailValue,
                success: function(result) {
                    //console.log(result);
                    if(result === "Taken") {
                        $('#email-error').html('Email is taken!');
                        //console.log(`email-failed`);
                        correctEmail = false;
                    } else {
                        correctEmail =true;
                        $('#email-error').html('');
                        //console.log(`email-valid`);
                    }
                }    
                
            });

            //console.log(`email-valid`);
            correctEmail = true;
            $('#email-error').html('');
        } else {
            //console.log(`email-failed`);
            correctEmail = false;
            $('#email-error').html('Email does not match the security pattern');
        }
    });

    //Проверка email
    $('#phone').blur(()=> {
        let phoneValue = $('#phone').val();
        //console.log(`userPhone: ${phoneValue}`);
        if(regExpPhone.test(phoneValue)) {
            //Проверка занятости phone:
            //==========================
            $.ajax({
                type: "POST",
                url: "/php/car-rental/auth/ajax_check_phone",
                data: "phone=" + phoneValue,
                success: function(result) {
                    //console.log(result);
                    if(result === "Taken") {
                        $('#phone-error').html('Phone is taken!');
                        //console.log(`phone-failed`);
                        correctPhone = false;
                    } else {
                        correctPhone =true;
                        $('#phone-error').html('');
                        //console.log(`phone-valid`);
                    }
                }    
                
            });

            //console.log(`phone-valid`);
            correctPhone = true;
            $('#phone-error').html('');
        } else {
            //console.log(`phone-failed`);
            correctPhone = false;
            $('#phone-error').html('Phone does not match the cellphone operators pattern');
        }
    });


    //Финальная проверка результатов валидации
    $('#submit').click(() => {
        if(correctName === true && correctLast === true  &&
           correctAge === true && correctPhone === true && correctEmail === true  &&
           correctPass1 === true && correctPass2 === true) {
                //alert('validate - true');
                $('#regform').attr('onsubmit','return true');
            } else {
                let blockMessage = 'The form contains incorrect data!\n';
                blockMessage += 'Sending data is blocked!';
                alert(blockMessage);
            }
    });
});