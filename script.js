// Get the current time

function updateClock() 
    {
    var now = new Date();
    
    var hours=now.getHours();
    var minutes=now.getMinutes();
    var seconds=now.getSeconds();
    var date=now.getDate();
    var month= now.getUTCMonth();
    var year= now.getFullYear();
    


    document.getElementById('hours').innerHTML = hours;
    document.getElementById('minutes').innerHTML = minutes;
    document.getElementById('seconds').innerHTML = seconds;
    document.getElementById('date').innerHTML = date;
    document.getElementById('month').innerHTML = month;
    document.getElementById('year').innerHTML = year;
    }
setInterval(updateClock, 1000);