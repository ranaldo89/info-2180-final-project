window.onload = function() {
    var bodyDiv = document.getElementById("body");
    var homeBtn = document.getElementById("home");
    var addUser = document.getElementById("addUser");
    var addIssue = document.getElementById("addIssue");
    var logout = document.getElementById("logout");
    var loginButton = document.getElementById("loginButton");
    var passwordField = document.getElementById("passwordField");
    var usernameField = document.getElementById("usernameField");
    var modal = document.getElementById("myModal");
    var httpRequest = new XMLHttpRequest();
    var url = "/index.php";
    //modal.style.display = "block";




    loginButton.addEventListener("click", function() {
        httpRequest.onreadystatechange = function() {
            if (httpRequest.readyState === 4 && httpRequest.status === 200) {
                var response = httpRequest.responseText;
                if (response == "true") {
                    modal.style.display = "none";
                }
            }
        };

        httpRequest.open('GET', url + "?email=" + usernameField.value + "&password=" + passwordField.value, true);
        httpRequest.send();

    });

    addUser.addEventListener("click", function() {
        httpRequest.onreadystatechange = function() {
            if (httpRequest.readyState === 4 && httpRequest.status === 200) {
                var response = httpRequest.responseText;
                bodyDiv.innerHTML = response;
            }
        };
        httpRequest.open('GET', url + "?new_user=true", true);
        console.log(httpRequest);

        httpRequest.send();
    });

    homeBtn.addEventListener("click", function() {
        httpRequest.onreadystatechange = function() {
            if (httpRequest.readyState === 4 && httpRequest.status === 200) {
                var response = httpRequest.responseText;
                bodyDiv.innerHTML = response;
            }
        };
        httpRequest.open('GET', url + "?home=true", true);
        console.log(httpRequest);

        httpRequest.send();
    });

    addIssue.addEventListener("click", function() {
        httpRequest.onreadystatechange = function() {
            if (httpRequest.readyState === 4 && httpRequest.status === 200) {
                var response = httpRequest.responseText;
                bodyDiv.innerHTML = response;
            }
        };
        httpRequest.open('GET', url + "?new_issue=true", true);
        console.log(httpRequest);

        httpRequest.send();
    });

    logout.addEventListener("click", function() {
        httpRequest.onreadystatechange = function() {
            if (httpRequest.readyState === 4 && httpRequest.status === 200) {
                var response = httpRequest.responseText;
                bodyDiv.innerHTML = response;
            }
        };
        httpRequest.open('GET', url + "?logout=true", true);
        console.log(httpRequest);
        httpRequest.send();
        modal.style.display = "block";
    });

}