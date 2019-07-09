$(document).ready(function () {
    $('.expense_staff_div').hide();
    $('.expense_quantity_div').hide();



    var expense_type =$('#Expense-Type').val();
    if(expense_type=='1'){ //SALARY
        $('.expense_quantity_div').hide();
        $('.expense_staff_div').show();
        $("#expense-quantity").val("");
    }else if(expense_type=='2'){ //DIESEL
        $('.expense_staff_div').hide();
        $('.expense_quantity_div').show();
        $("#Expense-staff").val("").change();
    }else if(expense_type !=''){
        $('.expense_staff_div').hide();
        $('.expense_quantity_div').hide();
    }



    $(".Expense-Types").on("change paste keyup", function(e) {
        e.preventDefault();
        // console.log(expense_type);
        var expense_type =$('#Expense-Type').val();
        if(expense_type=='1'){ //SALARY
            $('.expense_quantity_div').hide();
            $('.expense_staff_div').show();
            $("#expense-quantity").val("");
        }else if(expense_type=='2'){ //DIESEL
            $('.expense_staff_div').hide();
            $('.expense_quantity_div').show();
            $("#Expense-staff").val("").change();
        }else if(expense_type !=''){
            $('.expense_staff_div').hide();
            $('.expense_quantity_div').hide();
        }

        if(expense_type==''){
            $('.expense_staff_div').hide();
            $('.expense_quantity_div').hide();
        }
    });

});