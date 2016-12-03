  $(function () { 
// set the date we're counting down to
// update the tag with id "countdown" every 1 second
setInterval(function () {

      var t=$('[data-index="1"]').attr('date-value');
 var target_date = new Date(t).getTime();
// variables for time units
var days, hours, minutes, seconds;
    // find the amount of "seconds" between now and target
    var current_date = new Date().getTime();
    var seconds_left = (target_date - current_date) / 1000;
 
    // do some time calculations
    days = parseInt(seconds_left / 86400);
    seconds_left = seconds_left % 86400;
     
    hours = parseInt(seconds_left / 3600);
    seconds_left = seconds_left % 3600;
     
    minutes = parseInt(seconds_left / 60);
    seconds = parseInt(seconds_left % 60);
     
    // format countdown string + set tag value
    var countdown= days + "Days " + hours + "H "
    + minutes + "M " + seconds + "s";  
    $('[data-index="1"]').html(countdown);
 //var countdown = document.getElementById(countdown);


}, 1000);
});