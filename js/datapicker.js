<link rel="stylesheet" href="daterangepicker/daterangepicker.css">
$(function(){
      $('#date').daterangepicker({
        singleDatePicker: true,
        locale: {
          format: 'DD.MM.YYYY'
        }
      });
    });