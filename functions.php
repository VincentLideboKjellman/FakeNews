<?php
declare(strict_types=1);


// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.


//function printArticle(int $id, array $authors): string{
//  $authorsAndArticles = [];
  // foreach ($authors as $author) {
  //   if ($author['id'] === $id) {
  //     return ($author['name']);
  //   }
  // }
//}

// Compares two associative array publisherDate values for sorting articles so it's used correctly in the front end
function compareDate(array $a, array $b){ //remove after HELP: Vad skall returneras? plus hur fungerar returnen??
  $time1 = strtotime($a['publisherDate']);
  $time2 = strtotime($b['publisherDate']);
  return $time1 < $time2;
}
?>
