
(function ($) {
    "use strict";

    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })


    /*==================================================================
    [ Validate after type ]*/
    $('.validate-input .input100').each(function(){
        $(this).on('blur', function(){
            if(validate(this) == false){
                showValidate(this);
            }
            else {
                $(this).parent().addClass('true-validate');
            }
        })    
    })

    /*==================================================================
    [ Validate ]*/


    //*********************************************************************************************** */
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
           $(this).parent().removeClass('true-validate');
        });
    });

    
    function validate (input) {
       
        if($(input).attr('type') == 'tel' || $(input).attr('name') == 'phone') {
            if($(input).val().trim().match(/^\d{10}$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    


})(jQuery);