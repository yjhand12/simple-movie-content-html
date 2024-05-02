<?php
    $list_anime = [
        ["title" => "Wind Breaker", "description" => "Action, Comedy, Drama, School, Shounen", "image" => "image_1.png"],
        ["title" => "Viral Hit", "description" => "Action, Comedy, Martial Arts, School", "image" => "image_2.png"],
        ["title" => "The Many Sides of Voice Actor Radio", "description" => "Comedy, Drama, School, Slice of Life, Girls Love", "image" => "image_3.png"],
        ["title" => "Kaiju No.8", "description" => "Action, Adventure, Military, Sci-Fi, Shounen, Super Power", "image" => "image_4.png"],
        ["title" => "Dark Gathering", "description" => "Adventure, Horror, Shounen, Supernatural", "image" => "image_5.png"],
        ["title" => "Blue Lock", "description" => "Action, Drama, Shounen, Sports, Super Power", "image" => "image_6.png"],
        ["title" => "Saga of Tanya The Evil", "description" => "Action, Fantasy, Military, Isekai, Magic", "image" => "image_7.png"],
        ["title" => "Shikimori's Not Just a Cutie", "description" => "Comedy, Martial Arts, Romance, School, Shounen, Slice of Life, Iyashikei", "image" => "image_8.png"],
        ["title" => "The Girl I Like Forgot Her Glasses", "description" => "Comedy, Romance, School, Shounen, Iyashikei", "image" => "image_9.png"],
        ["title" => "Spy X Family", "description" => "Action, Comedy, Shounen, Slice of Life, Super Power, Supernatural", "image" => "image_10.png"],
        ["title" => "Solo Leveling", "description" => "Action, Adventure, Fantasy, Shounen, Super Power, Isekai, Magic", "image" => "image_11.png"],
        ["title" => "Jujutsu Kaisen", "description" => "Action, Drama, Fantasy, Martial Arts, School, Shounen, Supernatural", "image" => "image_12.png"],
        ["title" => "Sousou no Frieren", "description" => "Adventure, Drama, Fantasy, Shounen, Iyashikei, Demons, Magic", "image" => "image_13.png"],
        ["title" => "Attack on Titan", "description" => "Action, Drama, Fantasy, Mystery, Shounen, Super Power, Suspense", "image" => "image_14.png"],
        ["title" => "Classroom of The Elite", "description" => "Drama, Psychological, School, Suspense", "image" => "image_15.png"],
        ["title" => "Chainsaw Man", "description" => "Action, Drama, Fantasy, Horror, Shounen, Supernatural, Demons", "image" => "image_16.png"],
        ["title" => "A Sign of Affection", "description" => "Romance, Shoujo, Slice of Life, Iyashikei", "image" => "image_17.png"],
        ["title" => "Whisper Me a Love Song", "description" => "Drama, Music, Romance, School, Girls Love", "image" => "image_18.png"],
        ["title" => "Spy Classroom", "description" => "Action, Comedy, Drama, Fantasy, Mystery", "image" => "image_19.png"],
        ["title" => "Kimetsu no Yaiba", "description" => "Action, Adventure, Fantasy, Shounen, Supernatural, Demons", "image" => "image_20.png"],
    ];

    foreach ($list_anime as $list_animes) {
        $content[] = (object) $list_animes;
    }
    
    return $list_anime;

?>