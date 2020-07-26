<?php

function humanTiming($time) {

    $time = time() - strtotime($time); // to get the time since that moment
    $time = ($time < 1) ? 1 : $time;
    $tokens = array(
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit)
            continue;
        $numberOfUnits = floor($time / $unit);

        if (!in_array($text, ['year', 'month', 'week'])) {
            return $numberOfUnits . ' ' . $text . (($numberOfUnits > 1) ? 's' : '');
        } else {
            return date('d-M-Y h:i:s a');
        }
    }
}

function getTypeText($type){
    if($type == 'U'){
        return 'Owner';
    }else if($type == 'AG'){
        return 'Agent';
    }else if($type == 'AY'){
        return 'Agancy';
    }else if($type == 'CC'){
        return 'Company';
    }else{
        return 'Admin';
    }
}

function bulidingAgeText($value){
    if($value == '1'){
         return '0 to 1 year';
    }else if($value == '5'){
        return '1 to 5 years';
    }else if($value == '10'){
        return '5 to 10 years';
    }else if($value == '15'){
        return '10 to 15 years';
    }else if($value == '20'){
         return '15 to 20 years';
    }
}

?>
