<?php

require_once __DIR__ . '/movie.php';

$movie = new Movie ('Batman Begins', 'Christopher Nolan', '', '2005', '140 minutes', '', '', '');
// add actors array
$movie->addActor('Christian Bale');
$movie->addActor('Michael Caine');
$movie->addActor('Liam Neeson');
$movie->addActor('Katie Holmes');
$movie->addActor('Gary Oldman');
$movie->addActor('Cillian Murphy');
$movie->addActor('Morgan Freeman');

?>