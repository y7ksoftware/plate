document.addEventListener("DOMContentLoaded", function(event) {

    // Create the div element
    var div = document.createElement('div');
    div.className = 'envindicator envindicator-' + window.appEnv;
    div.innerHTML = window.envText;

    // Append it to the sidebar,
    // or on the loginscreen, replace the craft logo with it
    var sidebar = document.getElementById('global-sidebar');
    if(sidebar) {
        sidebar.appendChild(div);
    } else {
        var poweredby = document.getElementById('poweredby');
        poweredby.parentNode.replaceChild(div, poweredby);
    }

});
