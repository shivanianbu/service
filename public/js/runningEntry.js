$(document).ready(function () {
    $('#RunningEntry-loadingDiv').hide();
    $('#RunningEntry-total').attr('readonly', true);

    // CHECK RUNNING ENTRY CATAGORY IS LOADING SHOW LOAD DIV
    if($("#RuningEntry-catagories option:selected").val() == 'loading'){
        $('#RunningEntry-loadingDiv').show();
    }

    //    CHECK RUNNING ENTRY READING TYPE IS WITHOUT READING DISABLE STARTING AND ENDING READING
    if($(".RunningEntry-Readingtype:checked").val() != 'reading'){
        $('#RunningEntry-total').attr('readonly', false);
        $('#RunningEntry-starting').attr('readonly', true);
        $('#RunningEntry-ending').attr('readonly', true);
    }



    $("#RuningEntry-catagories").change(function () {
        if ($(this).val() == "loading") {
            $('#RunningEntry-loadingDiv').show();
            document.getElementById("RunningEntry-loading").required = true;
        } else {
            $('#RunningEntry-loadingDiv').hide();
            $('#RunningEntry-loading').val('');
            document.getElementById("RunningEntry-loading").required = false;
        }
        $( ".calculateRunningEntryValue" ).trigger( "change" );
    });

    $(".RunningEntry-Readingtype").change(function () {
        if ($(this).val() == "reading") {
            $('#RunningEntry-total').attr('readonly', true);
            $('#RunningEntry-starting').attr('readonly', false);
            $('#RunningEntry-ending').attr('readonly', false);
            $('#RunningEntry-total').val('');
            $("#RunningEntry-starting, #RunningEntry-ending").attr("required");
            document.getElementById("RunningEntry-total").required = false;
            document.getElementById("RunningEntry-starting").required = true;
            document.getElementById("RunningEntry-ending").required = true;
        } else {
            $('#RunningEntry-total').attr('readonly', false);
            $('#RunningEntry-starting').attr('readonly', true);
            $('#RunningEntry-ending').attr('readonly', true);
            $('#RunningEntry-starting').val('');
            $('#RunningEntry-ending').val('');
            $('#RunningEntry-total').val('');
            document.getElementById("RunningEntry-total").required = true;
            document.getElementById("RunningEntry-starting").required = false;
            document.getElementById("RunningEntry-ending").required = false;
        }
        $( ".calculateRunningEntryValue" ).trigger( "change" );
    })

    $(".calculateRunningEntryValue").on("change paste keyup", function() {
        var readingType = $(".RunningEntry-Readingtype:checked").val();

        if(readingType=='reading'){
            var Runningtotal = parseFloat($('#RunningEntry-ending').val()) - parseFloat($('#RunningEntry-starting').val());
            Runningtotal = Runningtotal.toFixed(2);
            $('#RunningEntry-total').val(Runningtotal);
        }

        if(Runningtotal<=0){
            $('#ErrorTotal').html('<p style="color:red">Check KM Value Entered</p>');
        }else{
            $('#ErrorTotal').html('');
        }

        var RuningEntryCatagoryType = $("#RuningEntry-catagories option:selected").val();

        var RunnignEntryBatta = $('#RunningEntry-batta').val();
        var RunnignEntryShiftRent = $('#RunningEntry-shiftRent').val();
        var RunnignEntryAdvance = $('#RunningEntry-advance').val();

        if(RunnignEntryBatta == ''){ RunnignEntryBatta = 0;  }
        if(RunnignEntryShiftRent == ''){ RunnignEntryShiftRent = 0;  }
        if(RunnignEntryAdvance == ''){ RunnignEntryAdvance = 0;  }


        if(RuningEntryCatagoryType != 'loading'){
            var BillAmount = parseFloat($('#RunningEntry-total').val()) * parseFloat($('#RunningEntry-rate').val()) + parseFloat(RunnignEntryBatta) + parseFloat(RunnignEntryShiftRent);
            $('#RunningEntry-bill').val(Math.round(BillAmount));
        }else{
            var BillAmount = (parseFloat($('#RunningEntry-rate').val()) * parseFloat($('#RunningEntry-loading').val())) + parseFloat(RunnignEntryBatta) + parseFloat(RunnignEntryShiftRent);
            $('#RunningEntry-bill').val(Math.round(BillAmount));
        }

        var BalanceAmount = parseFloat(BillAmount) - parseFloat(RunnignEntryAdvance);
        $('#RunningEntry-balance').val(Math.round(BalanceAmount));
    })




});