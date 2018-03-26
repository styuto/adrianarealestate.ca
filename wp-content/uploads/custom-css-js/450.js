<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 

// jQuery
$(document).ready(function(){		
	$(".more").toggle(function() {
	    $(this).text("Leer menos...").siblings(".complete").show();
	}, function() {
	    $(this).text("Leer mas...").siblings(".complete").hide();
	});	
});</script>
<!-- end Simple Custom CSS and JS -->
