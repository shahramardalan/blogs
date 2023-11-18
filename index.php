<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blogs App</title>

</head>

<body class="max-w-xl m-auto">
    <?php

    $blogs = [
        [
            "img" => "https://www.adv1wheels.com/wp-content/uploads/2016/11/adv1-widebody-porsche-turbo-s-carbon-fiber-body-kit-d-1170x780.jpg",
            "title" => "title-1",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dicta aliquam tenetur optio ratione repellendus. Laborum consectetur, voluptatem ipsam dolorum repellat quaerat illum vero nam tempore voluptatibus quasi perferendis! Quos est illum, sunt asperiores beatae esse reiciendis sit non, placeat repudiandae doloribus laboriosam et quo mollitia modi sequi repellendus odit. Ullam numquam voluptatibus quas id sapiente, quaerat non illo quis consequuntur nihil modi tenetur inventore fugit ut aperiam, magni vel animi, maiores commodi facilis odio ratione nesciunt! Molestiae, ut. Ratione laudantium illum officia nesciunt? Alias ratione sequi libero neque dolorum eum, similique molestias saepe ducimus, quia mollitia sit hic facilis.",
            "author" => "author-1",
            "category" => ["car"],
        ],
        [
            "img" => "https://hagerty-media-prod.imgix.net/2022/08/BRABUS-for-MB-EQS-450_Elegant-Elephant-klein-12-1170x780-1.jpeg?auto=format%2Ccompress&ixlib=php-3.3.0&w=1170",
            "title" => "title-2",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dicta aliquam tenetur optio ratione repellendus. Laborum consectetur, voluptatem ipsam dolorum repellat quaerat illum vero nam tempore voluptatibus quasi perferendis! Quos est illum, sunt asperiores beatae esse reiciendis sit non, placeat repudiandae doloribus laboriosam et quo mollitia modi sequi repellendus odit. Ullam numquam voluptatibus quas id sapiente, quaerat non illo quis consequuntur nihil modi tenetur inventore fugit ut aperiam, magni vel animi, maiores commodi facilis odio ratione nesciunt! Molestiae, ut. Ratione laudantium illum officia nesciunt? Alias ratione sequi libero neque dolorum eum, similique molestias saepe ducimus, quia mollitia sit hic facilis.",
            "author" => "author-2",
            "category" => ["car"],
        ],
        [
            "img" => "https://www.thebikemarket.co.uk/media/5375608/21_rh1250s_010_af.jpg?width=640&upscale=false",
            "title" => "title-1",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dicta aliquam tenetur optio ratione repellendus. Laborum consectetur, voluptatem ipsam dolorum repellat quaerat illum vero nam tempore voluptatibus quasi perferendis! Quos est illum, sunt asperiores beatae esse reiciendis sit non, placeat repudiandae doloribus laboriosam et quo mollitia modi sequi repellendus odit. Ullam numquam voluptatibus quas id sapiente, quaerat non illo quis consequuntur nihil modi tenetur inventore fugit ut aperiam, magni vel animi, maiores commodi facilis odio ratione nesciunt! Molestiae, ut. Ratione laudantium illum officia nesciunt? Alias ratione sequi libero neque dolorum eum, similique molestias saepe ducimus, quia mollitia sit hic facilis.",
            "author" => "author-1",
            "category" => ["motorcycle"],
        ],
        [
            "img" => "https://ultimatemotorcycling.com/wp-content/uploads/2022/01/2022-harley-davidson-street-glide-st-first-look-milwaukee-eight-117-motor-7.jpg",
            "title" => "title-2",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dicta aliquam tenetur optio ratione repellendus. Laborum consectetur, voluptatem ipsam dolorum repellat quaerat illum vero nam tempore voluptatibus quasi perferendis! Quos est illum, sunt asperiores beatae esse reiciendis sit non, placeat repudiandae doloribus laboriosam et quo mollitia modi sequi repellendus odit. Ullam numquam voluptatibus quas id sapiente, quaerat non illo quis consequuntur nihil modi tenetur inventore fugit ut aperiam, magni vel animi, maiores commodi facilis odio ratione nesciunt! Molestiae, ut. Ratione laudantium illum officia nesciunt? Alias ratione sequi libero neque dolorum eum, similique molestias saepe ducimus, quia mollitia sit hic facilis.",
            "author" => "author-2",
            "category" => ["motorcycle"],
        ],
        [
            "img" => "https://www.sefiles.net/images/library/zoom/marin-rift-zone-29-1-414864-1.jpg",
            "title" => "title-1",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dicta aliquam tenetur optio ratione repellendus. Laborum consectetur, voluptatem ipsam dolorum repellat quaerat illum vero nam tempore voluptatibus quasi perferendis! Quos est illum, sunt asperiores beatae esse reiciendis sit non, placeat repudiandae doloribus laboriosam et quo mollitia modi sequi repellendus odit. Ullam numquam voluptatibus quas id sapiente, quaerat non illo quis consequuntur nihil modi tenetur inventore fugit ut aperiam, magni vel animi, maiores commodi facilis odio ratione nesciunt! Molestiae, ut. Ratione laudantium illum officia nesciunt? Alias ratione sequi libero neque dolorum eum, similique molestias saepe ducimus, quia mollitia sit hic facilis.",
            "author" => "author-1",
            "category" => ["bicycle"],
        ],
        [
            "img" => "https://www.sefiles.net/images/library/zoom/liv-avail-advanced-3-419108-1.jpg",
            "title" => "title-2",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dicta aliquam tenetur optio ratione repellendus. Laborum consectetur, voluptatem ipsam dolorum repellat quaerat illum vero nam tempore voluptatibus quasi perferendis! Quos est illum, sunt asperiores beatae esse reiciendis sit non, placeat repudiandae doloribus laboriosam et quo mollitia modi sequi repellendus odit. Ullam numquam voluptatibus quas id sapiente, quaerat non illo quis consequuntur nihil modi tenetur inventore fugit ut aperiam, magni vel animi, maiores commodi facilis odio ratione nesciunt! Molestiae, ut. Ratione laudantium illum officia nesciunt? Alias ratione sequi libero neque dolorum eum, similique molestias saepe ducimus, quia mollitia sit hic facilis.",
            "author" => "author-2",
            "category" => ["bicycle"],
        ],
    ];
    ?>

    <?php

    foreach ($blogs as $blog) {
        foreach ($blog["category"] as $category) {

            echo '<div class="flex justify-center p-4 m-4 border-2 rounded-full bg-gray-200">';
            echo "<h2 class='text-2xl font-bold'>this is category {$category}</h2>";
            echo '</div>';
        }
        echo '<div class="fflex flex-col justify-center bg-gray-400 rounded-xl m-4 p-4">';
        echo "<img src={$blog["img"]} alt='' class=''>";
        echo "<h1 class='text-2xl font-bold'>{$blog["title"]}</h1>";
        echo "<p class='text-justify'>{$blog["desc"]}</p>";
        echo "<h3 class='font-bold'>{$blog["author"]}</h3>";
        echo '</div>';
    }
    echo "<br />";

    ?>
</body>

</html>