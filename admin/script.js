
//round up for 10
function roundup(round){
    return round < 10 ? "0"+ round : round ;
}



// Get the current time

function updateClock() 
    {
    var now = new Date();
    
    var hours=roundup(now.getHours());
    var minutes=roundup(now.getMinutes());
    var seconds=roundup(now.getSeconds());
    var date=roundup(now.getDate());
    var month= roundup(now.getUTCMonth());
    var year= roundup(now.getFullYear());
    


    document.getElementById('hours').innerHTML = hours;
    document.getElementById('minutes').innerHTML = minutes;
    document.getElementById('seconds').innerHTML = seconds;
    document.getElementById('date').innerHTML = date;
    document.getElementById('month').innerHTML = month;
    document.getElementById('year').innerHTML = year;
    }
setInterval(updateClock, 1000);