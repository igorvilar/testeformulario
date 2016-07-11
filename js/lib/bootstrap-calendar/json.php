<?php
$month = isset($_GET['month']) ? $_GET['month'] : date('n');
$year = isset($_GET['year']) ? $_GET['year'] : date('Y');

$array = array(
  array(
    "7/$month/$year", 
    'Sample Popover!', 
    '#', 
    '#2980b9', 
    'Event One'
  ),
  array(
    "17/$month/$year", 
    'Milestone!', 
    '#', 
    '#f39c12', 
    'Event Two'
  ),
  array(
    "27/$month/$year", 
    'Task due: Complete UI for Dashboard', 
    'http://zulazman.com', 
    '#c0392b'
  )
);

header('Content-Type: application/json');
echo json_encode($array);
exit;
?>