<?php
require 'YouTubeVideo.php';
require 'AllVideos.php';

$videos = [
    new YouTubeVideo('THE STRANGERS', 'zyRULBtS_GA', 'YouTube'),
    new YouTubeVideo('TERRIFIER 2', 'mXWZQBVc1V4', 'YouTube'),
    new YouTubeVideo('Smile', 'BcDK7lkzzsU', 'YouTube'),
    new YouTubeVideo('No One Gets Out Alive', 'sY2TLiK27g4', 'YouTube'),
    new YouTubeVideo('The Strays', 'o9_UteTT9wA', 'YouTube')
];

foreach ($videos as $video) {
    echo '<div class="YTVideo">';
    echo '<h2>' . $video->getTitel() . '</h2>';
    echo '<p>Quelle: ' . $video->getQuelle() . '</p>';
    echo $video->getEmbettet();
    echo '</div>';
}
?>
