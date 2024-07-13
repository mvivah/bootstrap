@extends('layouts.app')
@section('content')
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card-body">
                <div id="notdeccalendar" class="fc fc-media-screen fc-direction-ltr fc-theme-bootstrap"></div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let calendarEl = document.getElementById("notdeccalendar");
            let calendar = new FullCalendar.Calendar(calendarEl, {
                themeSystem: "bootstrap",
                initialView: "dayGridMonth",
                initialDate: new Date(),
                headerToolbar: {
                    left: "prev,next today",
                    center: "title",
                    right: "dayGridMonth,timeGridWeek,timeGridDay"
                },
                editable: true,
                selectable: true,
                businessHours: true,
                dayMaxEvents: true,
                select: function(info){
                    document.getElementById('activity_start').value = info.dateStr;
                    $('#addActivity').modal('show')
                },
                events: function(){
                    return axios.get('/activities')
                    .then(response =>{
                        return response.data;
                    })
                }
            });
        calendar.render();
        });
    </script>
@endsection
