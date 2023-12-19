$(function () {
    $('#txt-appoint_date_from').datetimepicker({
      minDate: moment().add(1, 'days')
    }).on('dp.change', function (selected) {
      $("#txt-appoint_date_before").datetimepicker('minDate',selected.date.add(1, 'days'));
      $(this).datetimepicker('hide');
   });
  
    $('#txt-appoint_date_before').datetimepicker({
       minDate: moment().add(2, 'days')
   }).on('dp.change', function (selected) {
      $(this).datetimepicker('hide');
   });;
  });