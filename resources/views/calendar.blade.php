<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
        <link href="{{asset('assets/FullCalendar/packages/core/main.css')}}" rel='stylesheet' />
        <link href="{{asset('assets/FullCalendar/packages/daygrid/main.css')}}" rel='stylesheet' />
        <link href="{{asset('assets/FullCalendar/packages/timegrid/main.css')}}" rel='stylesheet' />
        <link href="{{asset('assets/FullCalendar/packages/list/main.css')}}" rel='stylesheet' />
        <style>

            body {
                margin: 40px 10px;
                padding: 0;
                font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
                font-size: 14px;
            }

            #calendar {
                max-width: 900px;
                margin: 0 auto;
            }

        </style>
    </head>
<body>

    <div id='calendar'></div>

    <script src="{{asset('assets/FullCalendar/packages/core/main.js')}}"></script>
    <script src="{{asset('assets/FullCalendar/packages/interaction/main.js')}}"></script>
    <script src="{{asset('assets/FullCalendar/packages/daygrid/main.js')}}"></script>
    <script src="{{asset('assets/FullCalendar/packages/timegrid/main.js')}}"></script>
    <script src="{{asset('assets/FullCalendar/packages/list/main.js')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
            // header: {
            //     left: 'prev,next today',
            //     center: 'title',
            //     right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            // },
            defaultDate: '2020-05-12',
            // navLinks: true, // can click day/week names to navigate views
            businessHours: true, // display business hours
            editable: true,

            // On Date Pressed Started
            // dateClick(arg) {
            //     console.log('clicked' + arg.dateStr);
            // }
            // On Date Pressed End

            events:
                [
                    {
                        title: 'Business Lunch',
                        start: '2020-05-03T13:00:00',
                        constraint: 'businessHours'
                    },
                    {
                        title: 'Meeting',
                        start: '2020-05-13T11:00:00',
                        constraint: 'availableForMeeting', // defined below
                        color: '#257e4a'
                    },
                    {
                        title: 'Conference',
                        start: '2020-05-18',
                        end: '2020-05-20'
                    },
                    {
                        title: 'Party',
                        start: '2020-05-29T20:00:00'
                    },

                    // areas where "Meeting" must be dropped
                    {
                        groupId: 'availableForMeeting',
                        start: '2020-05-11T10:00:00',
                        end: '2020-05-11T16:00:00',
                        rendering: 'background'
                    },
                    {
                        groupId: 'availableForMeeting',
                        start: '2020-05-13T10:00:00',
                        end: '2020-05-13T16:00:00',
                        rendering: 'background'
                    },

                    // red areas where no events can be dropped
                    {
                        start: '2020-05-24',
                        end: '2020-05-28',
                        overlap: false,
                        rendering: 'background',
                        color: '#ff9f89'
                    },
                    {
                        start: '2020-05-06',
                        end: '2020-05-08',
                        overlap: false,
                        rendering: 'background',
                        color: '#ff9f89'
                    }
                ]
            });

            calendar.render();
        });

    </script>
</body>
</html>
