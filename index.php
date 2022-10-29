<?php

require_once __DIR__ . './movie.php';

$movie = new Movie ('Batman Begins', 'Christopher Nolan', '');
// add actors array
$movie->addActor('Christian Bale');
$movie->addActor('Michael Caine');
$movie->addActor('Liam Neeson');
$movie->addActor('Katie Holmes');
$movie->addActor('Gary Oldman');
$movie->addActor('Cillian Murphy');
$movie->addActor('Morgan Freeman');

$movie->release_date = 2005;
$movie->running_time = '140 minutes';
$movie->language = 'english';
$movie->release_date = 2005;
$movie->plot = "When his parents are killed, billionaire playboy Bruce Wayne relocates to Asia, where he is mentored by Henri Ducard and Ra's Al Ghul in how to fight evil. When learning about the plan to wipe out evil in Gotham City by Ducard, Bruce prevents this plan from getting any further and heads back to his home. Back in his original surroundings, Bruce adopts the image of a bat to strike fear into the criminals and the corrupt as the icon known as 'Batman'. But it doesn't stay quiet for long.";

var_dump($movie);

?>