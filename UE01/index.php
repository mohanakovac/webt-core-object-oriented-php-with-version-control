<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Trailer Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Acolytes of Ash</h2>
    <div class="container">

        <?php
        require 'VideoAbstract.php';
        require 'UserStory7/YouTubeVideo.php';
        require 'UserStory8/VimeoVideo.php';

        $videos = [
            new YouTubeVideo('THE STRANGERS', 'zyRULBtS_GA', 'YouTube'),
            new YouTubeVideo('TERRIFIER 2', 'mXWZQBVc1V4', 'YouTube'),
            new YouTubeVideo('Smile', 'BcDK7lkzzsU', 'YouTube'),
            new YouTubeVideo('No One Gets Out Alive', 'sY2TLiK27g4', 'YouTube'),
            new YouTubeVideo('The Strays', 'o9_UteTT9wA', 'YouTube'),
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

    </div>

</body>

</html>