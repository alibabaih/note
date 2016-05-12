<?php
$day_1 = array(
    "0" => array("time" => '09:00:00', "name" => 'To do something 1'),
    "1" => array("time" => '09:30:00', "name" => 'To do something 2'),
    "2" => array("time" => '10:00:00', "name" => 'To do something 3'),
    "3" => array("time" => '12:00:00', "name" => 'To do something 4')
);

$time_array = array("0" => array("time" => '09:00:00'), "1" => array("time" => '09:15:00'), "2" => array("time" => '09:30:00'), "3" => array("time" => '09:45:00'), "4" => array("time" => '10:00:00'), "5" => array("time" => '10:15:00'), "6" => array("time" => '10:30:00'), "7" => array("time" => '10:45:00'), "8" => array("time" => '11:00:00'), "9" => array("time" => '11:15:00'), "10" => array("time" => '11:30:00'), "11" => array("time" => '11:45:00'), "12" => array("time" => '12:00:00'), "13" => array("time" => '12:15:00'), "14" => array("time" => '12:30:00'), "15" => array("time" => '12:45:00'), "16" => array("time" => '13:00:00'), "17" => array("time" => '13:15:00'), "18" => array("time" => '13:30:00'), "19" => array("time" => '13:45:00'), "20" => array("time" => '14:00:00'), "21" => array("time" => '14:15:00'), "22" => array("time" => '14:30:00'), "23" => array("time" => '14:45:00'), "24" => array("time" => '15:00:00'), "25" => array("time" => '15:15:00'), "26" => array("time" => '15:30:00'), "27" => array("time" => '15:45:00'), "28" => array("time" => '16:00:00'), "29" => array("time" => '16:15:00'), "30" => array("time" => '16:30:00'), "31" => array("time" => '16:45:00'), "32" => array("time" => '17:00:00'), "33" => array("time" => '17:15:00'), "34" => array("time" => '17:30:00'), "35" => array("time" => '17:45:00'), "36" => array("time" => '18:00:00'), "37" => array("time" => '18:15:00'), "38" => array("time" => '18:30:00'), "39" => array("time" => '18:45:00'), "40" => array("time" => '19:00:00'));
$day_records = array();

//echo '<pre>'; print_r($day_1); echo '</pre>';
//echo '<pre>'; print_r($time_array); echo '</pre>';

foreach ($time_array as $key_time_array => $value_time_array){
    $found = false;

    foreach ($day_1 as $key => $value){
        if ($day_1[$key]['time'] == $time_array[$key_time_array]['time']) {
            $day_records[$key_time_array]['time']  = $day_1[$key]['time'];
            $day_records[$key_time_array]['name'] = $day_1[$key]['name'];
            $found = true;
        }
    }
    if (!$found){
        //add
        $day_records[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
        $day_records[$key_time_array]['name'] = "la";
    }
}


echo '<pre>'; print_r($day_records); echo '</pre>';

echo '-------------------------------------------------------------------------------------';

$time_array = array(
    "0" => array("time" => '09:00:00'),
    "1" => array("time" => '09:15:00'),
    "2" => array("time" => '09:30:00'),
    "3" => array("time" => '09:45:00'),
    "4" => array("time" => '10:00:00'),
    "5" => array("time" => '10:15:00'),
    "6" => array("time" => '10:30:00'),
    "7" => array("time" => '10:45:00'),
    "8" => array("time" => '11:00:00'),
    "9" => array("time" => '11:15:00'),
    "10" => array("time" => '11:30:00'),
    "11" => array("time" => '11:45:00'),
    "12" => array("time" => '12:00:00'),
    "13" => array("time" => '12:15:00'),
    "14" => array("time" => '12:30:00'),
    "15" => array("time" => '12:45:00'),
    "16" => array("time" => '13:00:00'),
    "17" => array("time" => '13:15:00'),
    "18" => array("time" => '13:30:00'),
    "19" => array("time" => '13:45:00'),
    "20" => array("time" => '14:00:00'),
    "21" => array("time" => '14:15:00'),
    "22" => array("time" => '14:30:00'),
    "23" => array("time" => '14:45:00'),
    "24" => array("time" => '15:00:00'),
    "25" => array("time" => '15:15:00'),
    "26" => array("time" => '15:30:00'),
    "27" => array("time" => '15:45:00'),
    "28" => array("time" => '16:00:00'),
    "29" => array("time" => '16:15:00'),
    "30" => array("time" => '16:30:00'),
    "31" => array("time" => '16:45:00'),
    "32" => array("time" => '17:00:00'),
    "33" => array("time" => '17:15:00'),
    "34" => array("time" => '17:30:00'),
    "35" => array("time" => '17:45:00'),
    "36" => array("time" => '18:00:00'),
    "37" => array("time" => '18:15:00'),
    "38" => array("time" => '18:30:00'),
    "39" => array("time" => '18:45:00'),
    "40" => array("time" => '19:00:00'),
);

echo '<pre>'; print_r($time_array); echo '</pre>';







$day_records_1 = array();$day_records_2 = array();$day_records_3 = array();$day_records_4 = array();$day_records_5 = array();
$day_records_6 = array();$day_records_7 = array();$day_records_8 = array();$day_records_9 = array();$day_records_10 = array();
$day_records_11 = array();$day_records_12 = array();$day_records_13 = array();$day_records_14 = array();$day_records_15 = array();
$day_records_16 = array();$day_records_17 = array();$day_records_18 = array();$day_records_19 = array();$day_records_20 = array();
$day_records_21 = array();$day_records_22 = array();$day_records_23 = array();$day_records_24 = array();$day_records_25 = array();
$day_records_26 = array();$day_records_27 = array();$day_records_28 = array();$day_records_29 = array();$day_records_30 = array();
$day_31 = array();