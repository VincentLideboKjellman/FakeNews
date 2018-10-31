<?php
declare(strict_types=1);
// This file contains all my functions

// Compares two associative array publisherDate values for sorting articles so -
// -it's used correctly in the front end.
function compareDate(array $a, array $b){
  $time1 = strtotime($a['publisherDate']);
  $time2 = strtotime($b['publisherDate']);
  return $time1 < $time2;
}
?>
