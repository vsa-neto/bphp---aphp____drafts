<?php
// declare(strict_types=1);


function printDaysInMonth($year, $monthNum)
{
    // Получаем количество дней в месяце (CAL_GREGORIAN - григорианский календарь) [14]
    $daysCount = cal_days_in_month(CAL_GREGORIAN, $monthNum, $year);

    $month = date("M", mktime(0, 0, 0, $monthNum, 10));
    echo $daysCount . PHP_EOL;

    $date = DateTime::createFromFormat("j-M-Y", "1-$month-$year");
    echo $date->format('d-M-Y') . PHP_EOL;

    $dateFormat = function ($date,  $workDay) {
        $dateFormat = date_format($date, 'D d');
        if ($workDay === true) {
            echo "\033[32m{$dateFormat}\033[0m ";
        } else {
            echo $dateFormat." ";
        }
    };

    for ($day = 1; $day <= $daysCount; $day += 3) {

        $date = DateTime::createFromFormat("j-M-Y", "$day-$month-$year");
        $dayName = (int) $date->format('N');



if($day === 1){
    switch (true) {
    case ($dayName === 2):
        echo "-- ";
        break;
    case ($dayName === 3):
        echo "-- -- ";
        break;
    case ($dayName === 4):
        echo "-- -- -- ";
        break;
    case ($dayName === 5):
        echo "-- -- -- -- ";
        break;
    case ($dayName === 6):
        echo "-- -- -- -- -- ";
        break;
    default:
        echo "-- -- -- -- -- -- ";
        break;
}
}

 if ($dayName === 6) {
            $day -= 1;
            $dateFormat($date, false);
            date_modify($date, "+1 day");
            $dateFormat($date, false);
        } else if ($dayName === 7) {
            $day -= 2;
            $dateFormat($date, false);
        } else {
            $dateFormat($date, true);
            date_modify($date, "+1 day");
            $dateFormat($date, false);
            date_modify($date, "+1 day");
            $dateFormat($date, false);
        }

        if ($dayName >= 5) {
            // echo $dayName;
            echo PHP_EOL;
        }



    }
}




printDaysInMonth(2025, 5);
