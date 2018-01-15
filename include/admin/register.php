<form action="" class="form-horizontal" role="form" method="POST" name="register">
    <h3>Create an Account</h3>
    <hr>
    <div class="form-group">
        <div class="col-md-4 col-md-offset-2">
            <label for="regFirstName" class="control-Label">First Name</label>
            <input id="regFirstName" name="regFirstName" class="form-control" placeholder="Adam" type="text">
        </div>
        <div class="col-md-4">
            <label for="regLastName" class="control-label">Last Name</label>
            <input id="regLastName" name="regLastName" class="form-control" placeholder="Doe" type="text">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <label for="regStudentNumber" class="control-label">Student Number</label>
            <input id="regStudentNumber" name="regStudentNumber" class="form-control" type="text">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4 col-md-offset-2">
            <label for="regFirstName" class="control-Label">Password</label>
            <input name="regPass" class="form-control" placeholder="Password" type="password">
        </div>
        <div class="col-md-4">
            <label for="regFirstName" class="control-Label">Repeat Password</label>
            <input name="regConfirmPass" class="form-control" placeholder="Repeat Password"
                   type="password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <input class="btn btn-primary btn-block" type="submit" value="Create account">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <hr>
            <p>Have an account?<a class="signin" href="#" id="signin"> Sign in</a></p>
        </div>
    </div>
</form>

