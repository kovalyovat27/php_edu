<?php include_once "utils/sessionExecutor.php"; ?>
<nav class="navbar navbar-expand-lg fixed-top ">
    <a class="navbar-brand" href="../index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-4">
            <?php if (!SessionExecutor::isUserAuthorized()) { ?>
                <li class="nav-item">
                    <a class="nav-link" data-target="#myModal" data-toggle="modal" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-target="#signUpModal" href="#" data-toggle="modal">Sign UP</a>
                </li>
            <?php } else {
                $userInfo = SessionExecutor::getUserData();?>
                <li class="nav-reg">
                    <div>
                        <form id="logoutForm">
                            <span><?php echo $userInfo['firstname'] . " " . $userInfo['secondname']?></span>
                            <img height="40px" src='<?php include_once "../controllers/avatarsController.php"?>' width="40px">
                            <button class="btn btn-secondary" type="submit" value="LogIn">LogOut</button>
                        </form>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>
<?php include_once "login-tag.php" ?>
<?php include_once "signup-tag.php" ?>
