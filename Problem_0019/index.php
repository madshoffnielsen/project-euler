<?php
// Initialize variables
$sundaysCount = 0;  // Count of Sundays falling on the first of the month
$dayOfWeek = 2;    // 0 for Sunday, 1 for Monday, ..., 6 for Saturday

// Iterate through the years from 1901 to 2000
for ($year = 1901; $year <= 2000; $year++) {
    // Iterate through the months (1 = January, 12 = December)
    for ($month = 1; $month <= 12; $month++) {
        // Check if the first day of the month is a Sunday (dayOfWeek = 0)
        if ($dayOfWeek === 0) {
            $sundaysCount++;
        }

        // Calculate the number of days in the current month
        if ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
            $daysInMonth = 30;
        } elseif ($month == 2) {
            // Check for leap year
            if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                $daysInMonth = 29;
            } else {
                $daysInMonth = 28;
            }
        } else {
            $daysInMonth = 31;
        }

        // Update the day of the week for the next month
        $dayOfWeek = ($dayOfWeek + $daysInMonth) % 7;
    }
}

echo $sundaysCount;