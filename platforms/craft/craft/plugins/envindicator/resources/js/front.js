document.addEventListener("DOMContentLoaded", function(event) {

    var notificationElement = document.createElement('div');
    notificationElement.className = 'envindicator envindicator-front envindicator-' + window.appEnv;
    notificationElement.innerHTML = window.envText + ' <div id="envindicator-close"><span></span><span></span></div>';
    document.body.appendChild(notificationElement);

    var close = document.getElementById('envindicator-close');

    close.addEventListener('click', function() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "/actions/envIndicator/frontend/hideNotification", true);
        xmlhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xmlhttp.send();
        notificationElement.parentNode.removeChild(notificationElement);
    });

});



