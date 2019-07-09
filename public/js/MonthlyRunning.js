// $(document).ready(function () {
//
//
//     $(".CalculateMonthlyRunningEntryValue").on("change paste keyup", function() {
//
//         var DateDiffer = new Date(new Date($('#MonthlyRunning-dateTo').val()) - new Date($('#MonthlyRunning-dateFrom').val()));
//         var DayTotal = DateDiffer/1000/60/60/24+1;
//         $('#MonthlyRunningEntry-totalDays').val(DayTotal);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//         var MonthlyRunningBatta = $('#MonthlyRunningEntry-batta').val();
//         var MonthlyRunningAdvance = $('#MonthlyRunningEntry-advance').val();
//         if(MonthlyRunningBatta == ''){ MonthlyRunningBatta = 0;  }
//         if(MonthlyRunningAdvance == ''){ MonthlyRunningAdvance = 0;  }
//
//         var BillAmount = parseFloat($('#MonthlyRunningEntry-totalDays').val()) * parseFloat($('#MonthlyRunningEntry-totalAmount').val()) + parseFloat(MonthlyRunningBatta) ;
//         $('#MonthlyRunningEntry-bill').val(BillAmount);
//
//         var BalanceAmount = parseFloat(BillAmount) - parseFloat(MonthlyRunningAdvance);
//         $('#MonthlyRunningEntry-balance').val(Math.round(BalanceAmount));
//     });
//
//
// })
