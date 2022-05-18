<div id="loginoverlay2" class=" position-absolute" style="width:100%;min-height:100%; padding:5%;margin:0;  z-index:1076;">
	<div id="loginbg2" style="width:100%;min-height:100%"></div>
    <div class="card p-3 shadow bg-light" style="margin:auto;left:0;right:0px;max-width:80%">
        <div class="card-header">No account found. Add details to create a new account <button type="button" class="btn-close text-right" style="float:right" aria-label="Close" onClick="closeLogin2()"></button></div>
        	
            <form class="row g-3 needs-validation card-body" method="post" action="#">
                <div class="col-md-4">
                    <label for="forename" class="form-label">Forename: </label>
                    <input type="name" class="form-control" name="forename" required>
                </div>
                <div class="col-md-4">
                    <label for="surname" class="form-label">Surname: </label>
                    <input type="name" class="form-control" name="surname" required>
                </div>
                <div class="col-md-4">
                    <label for="email" class="form-label">E-mail address: </label>
                    <input type="email" class="form-control" name="email" value="<?php echo($_POST['email']); ?>" required>
                </div>
                <div class="col-md-4">
                    <label for="password" class="form-label">Password: </label>
                    <input type="password" class="form-control" name="password" value="<?php echo($_POST['password']); ?>" required minlength="8">
                </div>
                <div class="col-md-4">
                    <label for="password2" class="form-label">Confirm password: </label>
                    <input type="password" class="form-control" name="password2" required minlength="8">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary mb-3" style="margin:30px">Register</button>
                </div>
            </form>
    </div>
</div>

<script>
$(document).ready(function(e) {
    $("#loginbg").show();
});

function closeLogin2(){
	$("#loginoverlay2").hide();	
	$("#loginbg").hide();
}
$(function() {
	$("#loginbg2").click(function() {
		$("#loginoverlay2").hide();
		$("#loginbg").hide();
	})
});
</script>