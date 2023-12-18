<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<!--Отключение прошлой даты form-->
					<script>
					$(document).ready(function() { 
					var dateToday = new Date();
					var month = dateToday.getMonth() + 1;
					var day = dateToday.getDate();
					var year = dateToday.getFullYear();

					if (month < 10)
						month = '0' + month.toString();
					if (day < 10)
						day = '0' + day.toString();

					var maxDate = year + '-' + month + '-' + day;

					$('#txt-appoint_date_from').attr('min', maxDate);
					});
					</script>
					<!--Отключение прошлой даты before-->
					<script>
					$(document).ready(function() { 
					var dateToday = new Date();
					var month = dateToday.getMonth() + 1;
					var day = dateToday.getDate();
					var year = dateToday.getFullYear();

					if (month < 10)
						month = '0' + month.toString();
					if (day < 10)
						day = '0' + day.toString();

					var maxDate = year + '-' + month + '-' + day;

					$('#txt-appoint_date_before').attr('min', maxDate);
					});
	</script>