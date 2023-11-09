<?php

use CodeIgniter\I18n\Time;

if (!function_exists("nav_active")) {
    function nav_active(string $route)
    {
        $uri = service('uri');
        if ($uri->getPath() == "/" . $route) {
            return "active";
        }
        return "";
    }
}
if (!function_exists("sub_menu_active")) {
    function sub_menu_active(string $route)
    {
        $uri = service('uri');
        if ($uri->getPath() == "/" . $route) {
            return 'class="active"';
        }
        return " ";
    }
}
if (!function_exists("sub_nav_active")) {
    function sub_nav_active(string $route, $name = 'apps')
    {

        $uri = service('uri');

        if (str_starts_with($uri->getPath(), "/" . $route)) {

            return 'x-init="activeMenu = \'' . $name . '\'"';
        }

        return " ";
    }
}
if (!function_exists("date_duration")) {
    function date_duration(string $startDateTime, string $endDateTime)
    {
        $start = new \DateTime($startDateTime);
        $end = new \DateTime($endDateTime);
        $duration = $start->diff($end);

        $formattedDuration = $duration->format('%H:%I:%S');
        return $formattedDuration;
    }
}
if (!function_exists("humanizeDuration")) {
    function humanizeDuration($duration)
    {
        $timeComponents = explode(':', $duration);
        $hours = (int) $timeComponents[0];
        $minutes = (int) $timeComponents[1];
        $seconds = (int) $timeComponents[2];

        $totalSeconds = ($hours * 3600) + ($minutes * 60) + $seconds;

        $humanized = '';

        $days = floor($totalSeconds / (3600 * 24));
        $hours = floor(($totalSeconds % (3600 * 24)) / 3600);
        $minutes = floor(($totalSeconds % 3600) / 60);
        $remainingSeconds = $totalSeconds % 60;

        if ($days > 0) {
            $humanized .= $days . ' d';
        }
        if ($hours > 0) {
            $humanized .= $hours . ' h';
        }
        if ($minutes > 0) {
            $humanized .= $minutes . ' m';
        }
        if ($remainingSeconds > 0) {
            $humanized .= $remainingSeconds . ' s';
        }

        return trim($humanized);
    }
}
if (!function_exists("humanizeTime")) {
    function humanizeTime($date)
    {
        $time = Time::parse($date, env('timezone'));

        return $time->toTimeString();
    }
}
if (!function_exists("humanizeDate")) {
    function humanizeDate($date)
    {
        $time = Time::parse($date, env('timezone'));

        return $time->toDateString();
    }
}
if (!function_exists("humanizeDateTime")) {
    function humanizeDateTime($date)
    {
        $time = Time::parse($date, env('timezone'));

        return $time->humanize();
    }
}
if (!function_exists("variatedByOffer")) {
    function variatedByOffer($offer)
    {
        if ($offer == "Rent") {
            return "month";
        }
        if ($offer == "Lease") {
            return "year";
        }
        return "";
    };
}
if (!function_exists("b5tooltip")) {
    function b5tooltip($title, $postion = 'top')
    {
        return " role='button' tabindex='0' data-bs-toggle='tooltip' data-bs-placement='$postion' title='$title' ";
    };
}
