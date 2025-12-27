


<@php
    #https://fullcalendar.io/
@endphp




@extends('admin.layouts.app_admin')

@section('content')
  <div>
    {{date('Y-m-d')}}
    {{date_default_timezone_get()}}
  </div>




  <div>
    
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.js'></script>
    <script src='fullcalendar/dist/index.global.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: 'bootstrap5',
            navLinks: true,
            navLinkDayClick: function(date, jsEvent) {
                console.log('day', date.toISOString());
                console.log('coords', jsEvent.pageX, jsEvent.pageY);
                

                var form = document.createElement('form');
                form.method = 'POST';
                form.action = "{{ route('rcv_calendar') }}";
                form.style.display = 'none';

                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'date';
                input.value = JSON.stringify({date: date.toISOString()});
                form.appendChild(input);
                var input2 = document.createElement('input');
                input2.type = 'hidden';
                input2.name = "_token";
                input2.value = "{{ csrf_token() }}";
                form.appendChild(input2);
                document.body.appendChild(form);
                form.submit();





            },
                
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });

    </script>


      <script>
    var date_today = "{{date('Y-m-d')}}";

    function getDayLabels(){
      var array_day = new Array();
      array_day.push(Array.from(document.getElementsByClassName('fc-day fc-day-mon fc-day-past fc-daygrid-day')));  //lunes
      array_day.push(Array.from(document.getElementsByClassName('fc-day fc-day-tue fc-day-past fc-daygrid-day')));  //martes
      array_day.push(Array.from(document.getElementsByClassName('fc-day fc-day-wed fc-day-past fc-daygrid-day')));  //miercoles
      array_day.push(Array.from(document.getElementsByClassName('fc-day fc-day-thu fc-day-past fc-daygrid-day')));  //jueves
      array_day.push(Array.from(document.getElementsByClassName('fc-day fc-day-fri fc-day-past fc-daygrid-day')));  //viernes
      array_day.push(Array.from(document.getElementsByClassName('fc-day fc-day-sat fc-day-past fc-daygrid-day')));  //sabado
      array_day.push(Array.from(document.getElementsByClassName('fc-day fc-day-sun fc-day-past fc-daygrid-day')));  //domingo
      return array_day;
    }

    var array_day = getDayLabels();

      
    if (elementsWithClass.length > 0) {
    // Access the first element in the collection
    const firstElement = elementsWithClass[0];

    // Get and log its tag name
    const tagName = firstElement.tagName;
    console.log(tagName);
    }   else {
    console.log('No elements found with this class');
    }

  </script>




    


    <div class ='container'>
        <div class='row'>
            <div class="col">
            </div>

            <div class="col-6">
                <div id='calendar'>

                </div>
            </div>
            <div class="col">

             </div>
        </div>
        

    </div>
  </div>

@endsection

