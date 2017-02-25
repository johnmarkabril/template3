<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5h8RE_Re9V9PJ-ROp7TKXQBKbMnWXDVE&callback=initMap">
    </script>
<script>
  var today = new Date().toISOString().split('T')[0];
  document.getElementsByName("reserveDate")[0].setAttribute('min', today);
  var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 14.6557671, lng: 120.9576072},
          zoom: 19
        });
    }
	$(function(){
    	$(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
        });
    });

</script>
