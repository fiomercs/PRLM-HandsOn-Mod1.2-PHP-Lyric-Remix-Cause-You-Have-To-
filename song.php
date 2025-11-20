<?php
$title = "Cause You Have To";
$artist = "LANY";
$mood = "Melancholy, Reflective, and Bittersweet";

//arrays
$nouns = ["heart", "ghost", "bed", "truth", "silence", "night", "head", "chest", "love", "friends", "mom", "dad"];
$verbs = ["chasin'", "make", "feel", "stop", "drive", "walk", "give", "reach", "see", "let", "stay"];
$adjectives = ["cold", "deep", "broken", "empty", "too", "thousand", "killin'"];

$verse1 = [
    "Chasin' a " . $nouns[0] . " is like chasin' a " . $nouns[1],   
    "You can't make somebody you " . $verbs[1] . " feel the same", 
    "If they don't",
    "It doesn't matter the words that you say",
    "Cause just like the seasons, you can't stop the way",
    "People " . $verbs[4]   
];
$preChorus = [
    "I'd " . $verbs[5] . " through the night",  
    "Walk a thousand miles",
    "To feel your head on my chest",
    "I'd give anythin'",
    "That's what's killin' me",
    "Cause you won't even reach across the bed"
];
$chorus = [
    "The " . $nouns[4] . " is gettin' too " . $adjectives[0],  
    "We stop fightin'",
    "Cause deep down inside, we both know",
    "Just for once, what do you want, baby, tell me the truth",
    "Do you only " . $verbs[2] . " me 'cause you have to?" 
];
$verse2 = [
    "All of your friends now were all of mine first",
    "Your " . $nouns[9] . " and your " . $nouns[10] . ", they were both there for me when mine weren't", 
    "I can't see tomorrow without you today",
    "But I'd rather let you " . $verbs[10] . " than make you feel like you've gotta stay"
];
$bridge = [
    "I'm so sorry, I wish I could be",
    "The one to " . $verbs[3] . " you more",
    "I hope you find somebody",
    "Who's got everythin' you're searchin' for"
];
$chorusReprise = [
    "So come on, don't be afraid to break my " . $nouns[0],  
    "It only gets worse if you wait",
    "Just for once, what do you want, baby, tell me the truth",
    "Do you only " . $verbs[2] . " me 'cause you have to?" 
];

$verseCount = count($verse1) + count($verse2); 
$repeatChorus = 2; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title . " by " . $artist; ?></title>
    <style> /* designs */ 
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #2596be; 
            color: #ffffff; 
            font-size: 14px; 
            text-align: center;
        }
        h1 {
            color: #ffffff; 
            text-align: center;
        }
        h2 {
            color: #ffffff;
            text-align: center;
            margin-top: 5px;
            font-size: 20px; 
        }
        .lyrics {
            line-height: 1.6;
        }
        .verse, .pre-chorus, .chorus, .bridge {
            margin-bottom: 20px;
        }
        h3 {
            font-weight: bold; 
        }
        .title-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        .title-container img {
            width: 50px; 
            height: auto;
        }
        .mood {
            text-align: center;
            font-size: 16px;
            margin-top: 10px;
            color: #cccccc;
        }
        .song-info {
            text-align: center;
            color: #cccccc;
            margin-top: 20px;
        }
        .song-info h4 {
            margin: 5px 0;
        }
        .song-info span {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="title-container">
        <img src="Album.png" alt="LANY Logo"> 
        <h1><?php echo $title; ?></h1>
    </div>

    <h2>by <?php echo $artist; ?></h2> 

    <div class="song-info">
        <h4>Producers: LANY & Mike Crossey</h4>
        <h4>Track 11 on <em>a beautiful blur (Deluxe)</em></h4>
        <h4>Sep. 29, 2023</h4> 
        <h4>67.5K views</h4> 
        <h4>Mood: <?php echo $mood; ?></h4>
    </div>

    <div class="lyrics">
        <div class="verse">
            <h3>[Verse 1]</h3>
            <p><?php echo implode('</p><p>', $verse1); ?></p> 
        </div>

        <div class="pre-chorus">
            <h3>[Pre-Chorus]</h3>
            <p><?php echo implode('</p><p>', $preChorus); ?></p>
        </div>

        <div class="chorus">
            <h3>[Chorus]</h3>
            <?php 
            for ($i = 0; $i < $repeatChorus; $i++) {
                echo "<p>" . implode('</p><p>', $chorus) . "</p>";
            }
            ?>
        </div>

        <div class="verse">
            <h3>[Verse 2]</h3>
            <p><?php echo implode('</p><p>', $verse2); ?></p>
        </div>

        <div class="pre-chorus">
            <h3>[Pre-Chorus]</h3>
            <p><?php echo implode('</p><p>', $preChorus); ?></p>
        </div>

        <div class="chorus">
            <h3>[Chorus]</h3>
            <p><?php echo implode('</p><p>', $chorus); ?></p>
            <p><?php echo implode('</p><p>', $chorusReprise); ?></p>
        </div>

        <div class="bridge">
            <h3>[Bridge]</h3>
            <p><?php echo implode('</p><p>', $bridge); ?></p>
        </div>

        <div class="chorus">
            <h3>[Chorus]</h3>
            <p><?php echo implode('</p><p>', $chorus); ?></p>
            <p><?php echo implode('</p><p>', $chorusReprise); ?></p>
        </div>
    </div>

    <div>
        <p><?php echo "There are " . $verseCount . " verses in this song."; ?></p>
    </div>

</body>
</html>
