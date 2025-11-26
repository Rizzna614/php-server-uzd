<?php
//echo "working";

$post =
[
    [
        "post_name" => "Lidls",
        "post_apr" => "Loti labs veikals",
        "comments" => ["wow", "Loti forsi", "super"],
    ],
    [
        "post_name" => "Rimcik tour",
        "post_apr" => "Garsigas bulcinas",
        "comments" => ["piekritu", "watsss", "labi!"],
    ],
];

foreach ($post as $i)
    {
        echo "<h1>".$i["post_name"]."</h1>";
        echo "<h2>".$i["post_apr"]."</h2>";
        
    };



?>