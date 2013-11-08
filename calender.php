<?php
include 'classes/calendar.php';
 
$month = isset($_GET['m']) ? $_GET['m'] : NULL;
$year  = isset($_GET['y']) ? $_GET['y'] : NULL;
 
$calendar = Calendar::factory($month, $year);
 
$event1 = $calendar->event()
    ->condition('timestamp', strtotime(date('F').' 21, '.date('Y')))
    
$event2 = $calendar->event()
    ->condition('timestamp', strtotime(date('F').' 21, '.date('Y')))
     
$calendar->standard('today')
    ->standard('prev-next')
    ->standard('holidays')
    
?>
