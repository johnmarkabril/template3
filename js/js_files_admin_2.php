<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script>
	$(document).ready(function() {
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'

			},
			minTime: "10:00:00",
			maxTime: "23:00:00",
			allDaySlot: false,
			defaultView: 'agendaWeek',
			editable: true,
			navLinks: true, // can click day/week names to navigate views
			eventLimit: true, // allow "more" link when too many events
			

			loading: function(bool) {
				$('#loading').toggle(bool);
			},
			eventResize: function(event) {
				var event_id = event.id;
				var start = event.start.format('YYYY-MM-DD H:mm');
				var end = event.end.format('YYYY-MM-DD H:mm');
				$.ajax ({
					url: 'update_calendar_event_list.php',
					method: "POST",
					data: {
						event_id	: event_id,
						start 		: start,
						end 		: end
					},
					success:function(data){
						 alert("Event updated");
					},
					error:function(){
						alert("Error");
					}
				});
		    },
			eventDrop: function(event){
				var event_id = event.id;
				var start = event.start.format('YYYY-MM-DD H:mm');
				var end = event.end.format('YYYY-MM-DD H:mm');
				$.ajax ({
					url: 'update_calendar_event_list.php',
					method: "POST",
					data: {
						event_id	: event_id,
						start 		: start,
						end 		: end
					},
					success:function(data){
						alert("Event updated");
					},
					error:function(){
						alert("Error");
					}
				});
			},
			events: 
			[
				<?php
	                include 'conn.php';
	                $query = "SELECT * FROM event";
	                $data = $connection->query($query);
	                
	                if($data->num_rows >= 1){
	                    while ($row = $data->fetch_assoc()){
                            $row['title'] = $row['TITLE'].'
                            '.$row['DESCRIPTION'];
                            $row['id'] = $row['NO'];
                            print_r(json_encode($row).',');
                        }
	                }
	            ?>
			]

		});
		
	});
</script>