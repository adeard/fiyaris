<?php

$date = '2020-11-23';

$format = date('m-y-d', strtotime($date));
echo "<pre>";
print_r("1. ".$format);

$format = date('Y-m-d', strtotime("+6 months", strtotime($date)));
echo "<pre>";
print_r("2. ".$format);

$format = date_diff(date_create('1994-01-29'), date_create($date));
echo "<pre>";
print_r("3. ".$format->y);

exit;