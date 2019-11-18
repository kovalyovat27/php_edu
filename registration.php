<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 landing page</title>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>

    <script type="text/javascript" src="js/validation/jqueryValidation.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>
<?php include_once "home-tag.php" ?>

<!-- Contact form -->
<div class="contact-form" id="contact">
    <div class="container">
        <form method="post" action="controllers/registrationController.php">
            <div class="row justify-content-center">
                <div class="col-8 right">
                        <span id="validation-errors">

                        </span>
                    <h5 id="error-info"></h5>
                    <h1 id="signup">Sign up</h1>
                    <div class="form-group">
                        <label for="firstname">Enter your firstname</label>
                        <input type="text" class="form-control form-control-lg" id="firstname" name="firstname"
                               required/>
                        <small class="form-text" id="firstname-info"></small>
                    </div>
                    <div class="form-group">
                        <label for="secondname">Enter your secondname</label>
                        <input type="text" class="form-control form-control-lg" id="secondname"
                               name="secondname" required/>
                        <small class="form-text" id="secondname-info"></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Enter your email</label>
                        <input type="email" class="form-control form-control-lg" id="email"
                               name="email" required/>
                        <small class="form-text" id="email-info"></small>
                    </div>
                    <div class="form-group">
                        <label for="role-selector">Select role:</label>
                        <select name="role" id="role-selector" class="form-control" required>
                            <option value="user">Simple user</option>
                            <option value="user">Moderator</option>
                        </select>
                        <small class="form-text" id="role-selector-info"></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Enter your password</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password"
                               required/>
                        <small class="form-text" id="password-info"></small>
                    </div>
                    <div class="form-group">
                        <label for="repassword">Repeat your password</label>
                        <input type="password" class="form-control form-control-lg" id="repassword"
                               name="repassword" required/>
                        <small class="form-text" id="repassword-info"></small>
                    </div>
                    <input type="submit" class="btn btn-secondary btn-block" value="Sign UP" name=""/>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>