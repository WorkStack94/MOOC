var c = 0;
var t;
var timer_is_on = 0;
var last_posx = 0;
var last_posy = 0;
var posx = 0;
var posy = 0;
var inactif = 0;

$(document).ready(function() {
    document.body.onmousemove = function(event){souris(event);};
    startCount();
        
    window.onblur = function() {
  	stopCount();
  	returnEvent("change_tab");
    }  
    
    window.onfocus = function() {
	returnEvent("return_tab");
	startCount();
    }
});

function timedCount() {
    if (timer_is_on == 1)
    {
	inactif = 0;
	c = c + 1;
	if (!isActive())
	    timer_is_on = 0;
    }
    else
    {
	if (isActive())
	    timer_is_on = 1;
	else
	    inactif = inactif + 1;
	if (inactif == 120)
	{
  	    returnEvent("inactif");
	    c = 0;
	}
    }
    last_posx = posx;
    last_posy = posy;
//    $("#time_value").val(inactif);
//    $("#time_value2").val(c);
    t = setTimeout(function(){timedCount();}, 1000);
}

function startCount() {
    if (!timer_is_on) {
        timer_is_on = 1;
        timedCount();
    }
}

function stopCount() {
    clearTimeout(t);
    timer_is_on = 0;
}

function isActive() {
    if (posx != last_posx || posy != last_posy)
	return (true);
    else
	return (false);
}

function returnEvent(type) {
    var login;
    var login_tmp;

    login_tmp = $(".user-link").html();
    login = login_tmp.split('>');

    $.ajax({
	type: "POST",
	url: "calcul.php",
	data: { name: type, date: new Date(), username:  login[login.length - 1].replace(' ','') }
    })
	.done(function() {
	    return (true);
	})
	.fail(function() {
	    return (false);
	});
}

function souris(event)
{
    posx = event.clientX;
    posy = event.clientY;
}
