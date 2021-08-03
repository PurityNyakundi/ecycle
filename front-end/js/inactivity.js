function inactivityTime() {
    let time;
    
    // events
    window.onload = resetTime;
    window.onclick = resetTime;
    window.onkeypress = resetTime;
    window.ontouchstart = resetTime;
    window.onmousemove = resetTime;
    window.onmousedown = resetTime;
    window.addEventListener('scroll', resetTime, true);

    function alertUser() {
        // do your task here
        alert("User is inactive.");
        // destroy_session();

    }

    function resetTime() {
        clearTimeout(time);
        time = setTimeout(alertUser, 1000 * 600); // 10 minutes
    }

};

// run the function
inactivityTime(); 

function destroy_session(){
    // var xmlhttp = getXmlHttp();
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open('GET','../../back-end/destroy.php', true);

    xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState == 4){
        if(xmlhttp.status == 200){
            alert(xmlhttp.responseText);
        }
    }

    };
    xmlhttp.send(null);
}
// destroy_session();