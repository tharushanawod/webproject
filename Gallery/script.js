$(document).ready(function() {
    // Initialize FullCalendar
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        events: [
            // Your events data will go here
            // Example: { title: 'Reserved', start: '2024-02-10' }
        ],
        editable: true,
        selectable: true,
        selectHelper: true
    });
});
