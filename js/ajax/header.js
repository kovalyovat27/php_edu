$(document).ready(function () {
    $("#loginForm").submit(function (e) {
        e.preventDefault();
        var data = $(this);
        var url = '../controllers/loginController.php';

        $.ajax({
            type: "POST",
            url: url,
            data: data.serialize(),
            success: function (response) {
                var responseData = JSON.parse(response);
                if (responseData.success == "0") {
                    var message = '<div class="alert alert-danger" role="alert">' + responseData.errorMessage + '</div>';
                    $("#login-validation-errors").html(message);
                } else {
                    window.location.href = "/";
                }
            }
        });
    });
});

$(document).ready(function () {
    $("#logoutForm").submit(function (e) {
        e.preventDefault();
        var data = $(this);
        var url = '../controllers/logOutController.php';

        $.ajax({
            type: "POST",
            url: url,
            data: data.serialize(),
            success: function (response) {
                var responseData = JSON.parse(response);
                if (responseData.success == "1") {
                    window.location.href = "/";
                }
            }
        });
    });
});