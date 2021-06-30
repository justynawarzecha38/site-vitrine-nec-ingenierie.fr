(function () {
    document.getElementById('newsletter-register').addEventListener('submit', function(event) {
        console.log('TEST');
        event.preventDefault();
        var form = document.getElementById('newsletter-register');
        var method = form.getAttribute('method');
        var action = form.getAttribute('action');
        var email = form.querySelector('input[name="email"]').value;

        var xhttp = new XMLHttpRequest();
        xhttp.onload = function(xhttp_event) {
            console.log(xhttp_event);
            try {
                var data = JSON.parse(xhttp_event.target.response);
                if (data !== null && typeof data === "object" && 'message' in data) {
                    alert(data.message);
                }
                if (xhttp_event.target.status === 200) {
                    form.reset();
                    //document.location.reload(true);
                }
            } catch (e) {
                console.error(e);
            }
        };
        xhttp.open(method, action, true);
        xhttp.setRequestHeader(
            "Content-Type",
            "application/x-www-form-urlencoded",
        );
        xhttp.send("email=" + encodeURIComponent(email));
        return false;
    }, false);
})();