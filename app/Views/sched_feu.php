<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Schedule</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ddd;
        }
        
        h1 {
            color: #2c3e50;
            font-size: 28px;
        }
        
        .week-navigation {
            display: flex;
            align-items: center;
        }
        
        .week-navigation button {
            background: #3498db;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 5px;
            transition: background 0.3s;
        }
        
        .week-navigation button:hover {
            background: #2980b9;
        }
        
        .current-week {
            font-weight: bold;
            margin: 0 15px;
            min-width: 200px;
            text-align: center;
        }
        
        .schedule {
            display: grid;
            grid-template-columns: 80px repeat(5, 1fr);
            gap: 10px;
            margin-bottom: 30px;
        }
        
        .time-slot {
            background: #ecf0f1;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            border-radius: 4px;
        }
        
        .day-header {
            background: #34495e;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 4px;
        }
        
        .schedule-item {
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .subject {
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .teacher, .room {
            font-size: 0.9em;
            color: #555;
        }
        
        /* Subject colors */
        .math { background: #ffeaa7; }
        .science { background: #fab1a0; }
        .english { background: #74b9ff; }
        .history { background: #a29bfe; }
        .art { background: #fd79a8; }
        .pe { background: #55efc4; }
        .lunch { background: #dfe6e9; }
        
        .legend {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }
        
        .legend-item {
            display: flex;
            align-items: center;
            margin-right: 15px;
        }
        
        .color-box {
            width: 20px;
            height: 20px;
            border-radius: 4px;
            margin-right: 5px;
        }
        
        footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #7f8c8d;
        }
        
        @media (max-width: 768px) {
            .schedule {
                grid-template-columns: 60px repeat(5, 1fr);
            }
            
            .day-header, .schedule-item {
                padding: 10px 5px;
                font-size: 0.9em;
            }
            
            header {
                flex-direction: column;
                text-align: center;
            }
            
            .week-navigation {
                margin-top: 15px;
            }
        }
        
        @media (max-width: 480px) {
            .schedule {
                grid-template-columns: 40px repeat(5, 1fr);
                gap: 5px;
            }
            
            .day-header, .schedule-item {
                padding: 5px 2px;
                font-size: 0.8em;
            }
            
            .time-slot {
                padding: 5px;
                font-size: 0.8em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>School Schedule</h1>
            <div class="week-navigation">
                <button id="prev-week">Previous Week</button>
                <div class="current-week" id="current-week">Week of September 4, 2023</div>
                <button id="next-week">Next Week</button>
            </div>
        </header>
        
        <div class="schedule">
            <!-- Time column -->
            <div class="time-slot">Time</div>
            <div class="day-header">Monday</div>
            <div class="day-header">Tuesday</div>
            <div class="day-header">Wednesday</div>
            <div class="day-header">Thursday</div>
            <div class="day-header">Friday</div>
            
            <!-- 8:00 AM -->
            <div class="time-slot">8:00 AM</div>
            <div class="schedule-item math">
                <div class="subject">Mathematics</div>
                <div class="teacher">Mr. Johnson</div>
                <div class="room">Room 204</div>
            </div>
            <div class="schedule-item science">
                <div class="subject">Science</div>
                <div class="teacher">Ms. Davis</div>
                <div class="room">Room 105</div>
            </div>
            <div class="schedule-item math">
                <div class="subject">Mathematics</div>
                <div class="teacher">Mr. Johnson</div>
                <div class="room">Room 204</div>
            </div>
            <div class="schedule-item science">
                <div class="subject">Science</div>
                <div class="teacher">Ms. Davis</div>
                <div class="room">Room 105</div>
            </div>
            <div class="schedule-item math">
                <div class="subject">Mathematics</div>
                <div class="teacher">Mr. Johnson</div>
                <div class="room">Room 204</div>
            </div>
            
            <!-- 9:00 AM -->
            <div class="time-slot">9:00 AM</div>
            <div class="schedule-item english">
                <div class="subject">English</div>
                <div class="teacher">Mrs. Williams</div>
                <div class="room">Room 312</div>
            </div>
            <div class="schedule-item history">
                <div class="subject">History</div>
                <div class="teacher">Mr. Thompson</div>
                <div class="room">Room 218</div>
            </div>
            <div class="schedule-item english">
                <div class="subject">English</div>
                <div class="teacher">Mrs. Williams</div>
                <div class="room">Room 312</div>
            </div>
            <div class="schedule-item history">
                <div class="subject">History</div>
                <div class="teacher">Mr. Thompson</div>
                <div class="room">Room 218</div>
            </div>
            <div class="schedule-item english">
                <div class="subject">English</div>
                <div class="teacher">Mrs. Williams</div>
                <div class="room">Room 312</div>
            </div>
            
            <!-- 10:00 AM -->
            <div class="time-slot">10:00 AM</div>
            <div class="schedule-item science">
                <div class="subject">Science</div>
                <div class="teacher">Ms. Davis</div>
                <div class="room">Room 105</div>
            </div>
            <div class="schedule-item math">
                <div class="subject">Mathematics</div>
                <div class="teacher">Mr. Johnson</div>
                <div class="room">Room 204</div>
            </div>
            <div class="schedule-item science">
                <div class="subject">Science</div>
                <div class="teacher">Ms. Davis</div>
                <div class="room">Room 105</div>
            </div>
            <div class="schedule-item math">
                <div class="subject">Mathematics</div>
                <div class="teacher">Mr. Johnson</div>
                <div class="room">Room 204</div>
            </div>
            <div class="schedule-item science">
                <div class="subject">Science</div>
                <div class="teacher">Ms. Davis</div>
                <div class="room">Room 105</div>
            </div>
            
            <!-- 11:00 AM -->
            <div class="time-slot">11:00 AM</div>
            <div class="schedule-item history">
                <div class="subject">History</div>
                <div class="teacher">Mr. Thompson</div>
                <div class="room">Room 218</div>
            </div>
            <div class="schedule-item english">
                <div class="subject">English</div>
                <div class="teacher">Mrs. Williams</div>
                <div class="room">Room 312</div>
            </div>
            <div class="schedule-item history">
                <div class="subject">History</div>
                <div class="teacher">Mr. Thompson</div>
                <div class="room">Room 218</div>
            </div>
            <div class="schedule-item english">
                <div class="subject">English</div>
                <div class="teacher">Mrs. Williams</div>
                <div class="room">Room 312</div>
            </div>
            <div class="schedule-item history">
                <div class="subject">History</div>
                <div class="teacher">Mr. Thompson</div>
                <div class="room">Room 218</div>
            </div>
            
            <!-- 12:00 PM -->
            <div class="time-slot">12:00 PM</div>
            <div class="schedule-item lunch">
                <div class="subject">Lunch</div>
                <div class="teacher">-</div>
                <div class="room">Cafeteria</div>
            </div>
            <div class="schedule-item lunch">
                <div class="subject">Lunch</div>
                <div class="teacher">-</div>
                <div class="room">Cafeteria</div>
            </div>
            <div class="schedule-item lunch">
                <div class="subject">Lunch</div>
                <div class="teacher">-</div>
                <div class="room">Cafeteria</div>
            </div>
            <div class="schedule-item lunch">
                <div class="subject">Lunch</div>
                <div class="teacher">-</div>
                <div class="room">Cafeteria</div>
            </div>
            <div class="schedule-item lunch">
                <div class="subject">Lunch</div>
                <div class="teacher">-</div>
                <div class="room">Cafeteria</div>
            </div>
            
            <!-- 1:00 PM -->
            <div class="time-slot">1:00 PM</div>
            <div class="schedule-item art">
                <div class="subject">Art</div>
                <div class="teacher">Ms. Rodriguez</div>
                <div class="room">Room 115</div>
            </div>
            <div class="schedule-item pe">
                <div class="subject">Physical Education</div>
                <div class="teacher">Coach Miller</div>
                <div class="room">Gym</div>
            </div>
            <div class="schedule-item art">
                <div class="subject">Art</div>
                <div class="teacher">Ms. Rodriguez</div>
                <div class="room">Room 115</div>
            </div>
            <div class="schedule-item pe">
                <div class="subject">Physical Education</div>
                <div class="teacher">Coach Miller</div>
                <div class="room">Gym</div>
            </div>
            <div class="schedule-item art">
                <div class="subject">Art</div>
                <div class="teacher">Ms. Rodriguez</div>
                <div class="room">Room 115</div>
            </div>
        </div>
        
        <div class="legend">
            <div class="legend-item">
                <div class="color-box math"></div>
                <span>Mathematics</span>
            </div>
            <div class="legend-item">
                <div class="color-box science"></div>
                <span>Science</span>
            </div>
            <div class="legend-item">
                <div class="color-box english"></div>
                <span>English</span>
            </div>
            <div class="legend-item">
                <div class="color-box history"></div>
                <span>History</span>
            </div>
            <div class="legend-item">
                <div class="color-box art"></div>
                <span>Art</span>
            </div>
            <div class="legend-item">
                <div class="color-box pe"></div>
                <span>Physical Education</span>
            </div>
            <div class="legend-item">
                <div class="color-box lunch"></div>
                <span>Lunch</span>
            </div>
        </div>
        
        <footer>
            <p>© 2023 School Schedule | Last updated: September 1, 2023</p>
        </footer>
    </div>

    <script>
        // Simple week navigation functionality
        document.addEventListener('DOMContentLoaded', function() {
            const currentWeekElement = document.getElementById('current-week');
            const prevButton = document.getElementById('prev-week');
            const nextButton = document.getElementById('next-week');
            
            let currentDate = new Date(2023, 8, 4); // September 4, 2023
            
            function updateWeekDisplay() {
                const options = { year: 'numeric', month: 'long', day: 'numeric' };
                const weekStart = new Date(currentDate);
                const weekEnd = new Date(currentDate);
                weekEnd.setDate(weekEnd.getDate() + 4); // School week is 5 days
                
                currentWeekElement.textContent = `Week of ${weekStart.toLocaleDateString('en-US', options)}`;
            }
            
            prevButton.addEventListener('click', function() {
                currentDate.setDate(currentDate.getDate() - 7);
                updateWeekDisplay();
            });
            
            nextButton.addEventListener('click', function() {
                currentDate.setDate(currentDate.getDate() + 7);
                updateWeekDisplay();
            });
            
            updateWeekDisplay();
        });
    </script>
</body>
</html>