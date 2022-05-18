<div id="toastNotice" class="toast fade position-fixed" style="bottom:5%;z-index:1200" data-delay="2000">
    <div class="toast-header">
      <img src="../assets/favicon.png" class="me-2" alt="">
      <strong class="mr-auto text-primary">Login status</strong>
      <button type="button" class="btn-close close" data-dismiss="toast" aria-label="Close"> </button>
    </div>
    <div class="toast-body">
      <?php echo $err; ?> 
    </div>
</div>

<script>
	$(document).ready(function(){
    	$(".toast").toast('show');
		$("#loginbg").show();
	});
    
    $(function() {
        $("#loginbg").click(function() {
        	$(".toast").toast('hide');
            $("#loginoverlay").hide();
            $("#loginbg").hide();
        })
	});
</script>