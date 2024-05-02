<?php
    $list_anime = [
    [
        "id" => 0,
        "title" => "Wind Breaker",
        "description" => "Action, Comedy, Drama, School, Shounen",
        "image" => "image_1.png"
    ],
    [
        "id" => 1,
        "title" => "Viral Hit",
        "description" => "Action, Comedy, Martial Arts, School",
        "image" => "image_2.png"
    ],
    [
        "id" => 2,
        "title" => "The Many Sides of Voice Actor Radio",
        "description" => "Comedy, Drama, School, Slice of Life, Girls Love",
        "image" => "image_3.png"
    ],
    [
        "id" => 3,
        "title" => "Kaiju No.8",
        "description" => "Action, Adventure, Military, Sci-Fi, Shounen, Super Power",
        "image" => "image_4.png"
    ],
    [
        "id" => 4,
        "title" => "Dark Gathering",
        "description" => "Adventure, Horror, Shounen, Supernatural",
        "image" => "image_5.png"
    ],
    [
        "id" => 5,
        "title" => "Blue Lock",
        "description" => "Action, Drama, Shounen, Sports, Super Power",
        "image" => "image_6.png"
    ],
    [
        "id" => 6,
        "title" => "Saga of Tanya The Evil",
        "description" => "Action, Fantasy, Military, Isekai, Magic",
        "image" => "image_7.png"
    ],
    [
        "id" => 7,
        "title" => "Shikimori's Not Just a Cutie",
        "description" => "Comedy, Martial Arts, Romance, School, Shounen, Slice of Life, Iyashikei",
        "image" => "image_8.png"
    ],
    [
        "id" => 8,
        "title" => "The Girl I Like Forgot Her Glasses",
        "description" => "Comedy, Romance, School, Shounen, Iyashikei",
        "image" => "image_9.png"
    ],
    [
        "id" => 9,
        "title" => "Spy X Family",
        "description" => "Action, Comedy, Shounen, Slice of Life, Super Power, Supernatural",
        "image" => "image_10.png"
    ],
    [
        "id" => 10,
        "title" => "Solo Leveling",
        "description" => "Action, Adventure, Fantasy, Shounen, Super Power, Isekai, Magic",
        "image" => "image_11.png"
    ],
    [
        "id" => 11,
        "title" => "Jujutsu Kaisen",
        "description" => "Action, Drama, Fantasy, Martial Arts, School, Shounen, Supernatural",
        "image" => "image_12.png"
    ],
    [
        "id" => 12,
        "title" => "Sousou no Frieren",
        "description" => "Adventure, Drama, Fantasy, Shounen, Iyashikei, Demons, Magic",
        "image" => "image_13.png"
    ],
    [
        "id" => 13,
        "title" => "Attack on Titan",
        "description" => "Action, Drama, Fantasy, Mystery, Shounen, Super Power, Suspense",
        "image" => "image_14.png"
    ],
    [
        "id" => 14,
        "title" => "Classroom of The Elite",
        "description" => "Drama, Psychological, School, Suspense",
        "image" => "image_15.png"
    ],
    [
        "id" => 15,
        "title" => "Chainsaw Man",
        "description" => "Action, Drama, Fantasy, Horror, Shounen, Supernatural, Demons",
        "image" => "image_16.png"
    ],
    [
        "id" => 16,
        "title" => "A Sign of Affection",
        "description" => "Romance, Shoujo, Slice of Life, Iyashikei",
        "image" => "image_17.png"
    ],
    [
        "id" => 17,
        "title" => "Whisper Me a Love Song",
        "description" => "Drama, Music, Romance, School, Girls Love",
        "image" => "image_18.png"
    ],
    [
        "id" => 18,
        "title" => "Spy Classroom",
        "description" => "Action, Comedy, Drama, Fantasy, Mystery",
        "image" => "image_19.png"
    ],
    [
        "id" => 19,
        "title" => "Kimetsu no Yaiba",
        "description" => "Action, Adventure, Fantasy, Shounen, Supernatural, Demons",
        "image" => "image_20.png"
    ]
];

    $content = [];
    foreach ($list_anime as $list_animes) {
        $content[] = (object) $list_animes;
    }
    
    return $content;

?>