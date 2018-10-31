<?php
declare(strict_types=1);
//This file holds the Data in the arrays.

//Author id needs to be associated with the right Article id.
$authors = [
  [
    'id' => 1,
    'name' => 'Vinnie Coleman'
  ],
  [
    'id' => 2,
    'name' => 'Stephen King'
  ],
  [
    'id' => 3,
    'name' => 'Mark Twain'
  ],
  [
    'id' => 4,
    'name' => 'Edgar Allan Poe'
  ],
  [
    'id' => 5,
    'name' => 'Donald Duck'
  ]
];

$articles = [
  [
    'title' => 'This is: Lorem - Why we make it easy for us',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
      ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
      velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
      cupidatat non proident,
      sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'publisherDate' => "2016-03-25",
    'likeCounter' => 12,
    'authorId' => 1,
    'img' => 'img/lorem1.jpg'
],
[
  'title' => 'This is: Lorem 2 - The words of internet',
  'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
    odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
    Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
    Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris
    sit amet orci. Aenean dignissim pellentesque felis.
    <br><br>
    Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in,
    pharetra a, ultricies in, diam. Sed arcu. Cras consequat.
    Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae,
    eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt
    quis, accumsan porttitor, facilisis luctus, metus.
    Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer
    ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a,
    sodales sit amet, nisi.',
  'publisherDate' => "2018-02-16",
  'likeCounter' => 2745,
  'authorId' => 1,
  'img' => 'img/lorem2.png'
],
[
  'title' => 'Machine Learning is changing the world',
  'content' => '
    VW’s issues have made his consolidation thesis "more valid," Marchionne said
    Wednesday on an earnings conference call. The CEO, who has been rebuffed by
    General Motors Co. and Ford Motor Co., said he has spoken with automakers who
    share his views on the need for companies to merge to spread costs.
    "Our self-driving cars are being hit surprisingly often by other drivers who
    are distracted and not paying attention to the road," wrote Chris Urmson,
    director of Google\'s self-driving car project, in the blog post.
    <br><br>
    "The clear theme is human error and inattention" in those incidents.
    Google is testing a fleet of 23 specially equipped Lexus prototypes,
    and said it has logged more than 1 million test miles. Last month,
    the company began testing tiny, bubble-shaped self-driving prototype
    vehicles of its own design on public roads around Mountain View.',
  'publisherDate' => "2017-07-19",
  'likeCounter' => 98,
  'authorId' => 2,
  'img' => "img/ml.jpg"
],
[
  'title' => '5 Reasons Why This Works',
  'content' => '1: This works because ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
    ex ea commodo 2: consequat. Duis aute irure dolor in reprehenderit in voluptate
    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
    cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.',
  'publisherDate' => "2018-03-26",
  'likeCounter' => 50,
  'authorId' => 2,
  'img' => "img/top5.jpg"
],
[
  'title' => 'What is Time?',
  'content' => 'Time is Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
    cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.',
  'publisherDate' => "2018-03-27",
  'likeCounter' => 44,
  'authorId' => 3,
  'img' => "img/whatistime.jpg"
],
[
  'title' => 'Timing is Everything!',
  'content' => 'Time is Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
    cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.',
  'publisherDate' => "2017-12-25",
  'likeCounter' => 188,
  'authorId' => 3,
  'img' => 'img/time2.jpg'
],
[
  'title' => 'Scientists have discovered why Coffee is good for you',
  'content' => 'Coffee is Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
    cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.',
  'publisherDate' => "2017-05-04",
  'likeCounter' => 468,
  'authorId' => 4,
  'img' => 'img/coffee1.jpg'
],
[
  'title' => 'New study shows coffee might be bad for you',
  'content' => 'Yes, that is right, scientists say: Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
    cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.',
  'publisherDate' => "2018-01-02",
  'likeCounter' => 517,
  'authorId' => 4,
  'img' => 'img/coffee2.jpg'
],
[
  'title' => 'You will NEVER guess how this man made 1 million in one month!',
  'content' => 'You might think that making Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
    cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.',
  'publisherDate' => "2017-11-03",
  'likeCounter' => 1783,
  'authorId' => 5,
  'img' => 'img/money1.jpg'
],
[
  'title' => 'This is exactly what one man said and you will NOT believe it!',
  'content' => 'No one knows what ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
    cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.',
  'publisherDate' => "2016-08-27",
  'likeCounter' => 47,
  'authorId' => 5,
  'img' => 'img/said1.jpg'
],
];
?>
