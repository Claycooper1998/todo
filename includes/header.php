<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>ToDo</title>
</head>
<body class="bg-gray-300">
    <div class="mx-8 bg-white">
        <div id="header" class="w-full flex border-b p-8">
            <div>
                <a href="/" class="text-2xl font-bold">ToDo list with PHP</a>
            </div>

            <div class="flex justify-end flex-grow">

                <!-- This loops through the pages to gather the nav names and makes sure each button has a specific -->
                    <?php 
                    foreach ($pages as $page) {
                        echo '<a href=' . '"' . $page['request_uri'] . '"' .  
                        "class='p-3 bg-gray-200 rounded font-bold mx-2'>" . $page['nav_name'] . "</a>";
                    }
                    ?>
                

            </div>
        </div>
        <div id="pageBody" class="mt-4 p-8 bg-gray-500">
