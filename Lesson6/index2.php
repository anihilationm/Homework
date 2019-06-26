<?php

$handle = fopen("php://stdin", "r");

echo "What room you are looking for?";
$room = trim(fgets($handle));

echo "How many floors in that house?";
$stores = trim(fgets($handle));

echo "How many rooms are there per one floor?";
$rooms_on_floor = trim(fgets($handle));

function find_room($room, $stores, $rooms_on_floor)
{
    $rooms_in_porch = $stores * $rooms_on_floor;

    $find_porch = function ($rooms_in_porch) use ($room) {
        $k = 0;
        for ($i = 0; $i < $room; $k += 1) {
            if ($rooms_in_porch < $room) {
                $i += $rooms_in_porch;
            } else {
                return $k + 1;
            }
        };
        return $k;
    };

    $our_porch = $find_porch($rooms_in_porch);

    $get_first_appt = function ($our_porch) use ($rooms_in_porch) {
        $first_appt = $our_porch * $rooms_in_porch - $rooms_in_porch + 1;
        return $first_appt;
    };

    $first_appt = $get_first_appt($our_porch);

    $get_our_floor = function ($first_appt, $rooms_in_porch, $room) use ($rooms_on_floor) {
        $roof = $first_appt + $rooms_in_porch;
        $step = 0;

        for ($i = $first_appt; $i < $roof;) {
            if ($i > $room) {
                return $step;
            };

            $step += 1;
            $i += $rooms_on_floor;
        };
    };

    $our_floor = $get_our_floor($first_appt, $rooms_in_porch, $room);

    return $output = "The appartments you are looking for -  " . $room . " can be found in porch number " . $our_porch . " on the floor number " . $our_floor;
};

echo find_room($room, $stores, $rooms_on_floor);
