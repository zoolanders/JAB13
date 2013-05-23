<button class="button-default demo-jab13">Demo</button>

<script type="text/javascript">
jQuery(document).ready(function($){
	$('button.demo-jab13').click(function(){
		$.get('<?php echo $url; ?>', function(data){
			alert(data);
		});
	});
});
</script>