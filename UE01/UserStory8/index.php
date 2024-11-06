<?php
require 'YouTubeVideo.php';
require 'VimeoVideo.php';

$videos = [
    new YouTubeVideo('THE STRANGERS', 'zyRULBtS_GA', 'YouTube'),
    new YouTubeVideo('TERRIFIER 2', 'mXWZQBVc1V4', 'YouTube'),
    new VimeoVideo('In the Woods', '374933662', 'Vimeo'),
    new VimeoVideo('Daydream', '257777066', 'Vimeo'),
    new VimeoVideo('The Haunted House', '269458487', 'Vimeo')
];

foreach ($videos as $video) {
    echo '<div class="YTVideo">';
    echo '<h2>' . $video->getTitel() . '</h2>';
    echo '<p>Quelle: ' . $video->getQuelle() . '</p>';
    echo $video->getEmbettet();
    echo '</div>';
}
?>
