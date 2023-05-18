<!DOCTYPE html>
<html>
<head>
  <title>Personal Information System - Timetable</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    table td, table th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    table th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>Personal Information System - Timetable</h1>

  <table>
    <tr>
      <th>Day</th>
      <th>Time</th>
      <th>Event</th>
    </tr>
    <?php
      // Display timetable data in HTML table
      echo "<tr>";
      echo "<td>Monday</td>";
      echo "<td>9:00 AM - 10:00 AM</td>";
      echo "<td>Meeting</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Tuesday</td>";
      echo "<td>2:00 PM - 4:00 PM</td>";
      echo "<td>Workshop</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Wednesday</td>";
      echo "<td>11:00 AM - 12:30 PM</td>";
      echo "<td>Training</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Thursday</td>";
      echo "<td>3:30 PM - 5:00 PM</td>";
      echo "<td>Conference</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Friday</td>";
      echo "<td>9:30 AM - 11:00 AM</td>";
      echo "<td>Presentation</td>";
      echo "</tr>";
    ?>
  </table>
</body>
</html>
