<?php

function calculateDistance($lat1, $lng1,$lat2,$lng2) {
    $R = 6371; // km
    $dLat = deg2rad($lat2-$lat1);
    $dLon = deg2rad($lng2-$lng1);
    $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon/2) * sin($dLon/2);
    $c = 2 * atan2(sqrt($a), sqrt(1-$a));
    $d = $R * $c;
    return $d;
}


?>