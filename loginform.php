<div id="loginoverlay" class="position-absolute" style="width:100%;min-height:100%; padding:5%; display:none; z-index:1075;">
	
    <div class="card p-3 shadow bg-light" style="margin:auto;left:0;right:0px;max-width:80%">
        <div class="card-header">Login/Sign-up <button type="button" class="btn-close text-right" style="float:right" aria-label="Close" onClick="closeLogin()"></button></div>
        	
            <form class="row g-3 needs-validation card-body" method="post" action="#">
                <div class="col-md-4">
                    <label for="email" class="form-label">E-mail address: </label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                </div>
                <div class="col-md-4">
                    <label for="password" class="form-label">Password: </label>
                    <input type="password" class="form-control" name="password" required minlength="8">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary mb-3" style="margin:30px">Register/sign-in</button>
                </div>
            </form>
    </div>
</div>

<script>

function closeLogin(){
	$("#loginoverlay").hide();
	$("#loginbg").hide();
}
$(function() {
	$("#loginbg").click(function() {
		$("#loginoverlay").hide();
		$("#loginbg").hide();
		$(".toast").toast('hide');
	})
});
</script>