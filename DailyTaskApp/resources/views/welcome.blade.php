<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daily Task App</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin: 0;
                padding: 0;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #f3f4f6; /* Light gray background */
            }

            .center-text {
                text-align: center;
                font-size: 68px;
                font-weight: 700;
                color: #2d3748; /* Dark gray color */
            }
        </style>
    </head>
    <body>
        <div class="center-text">
            DAILY TASK APP
        </div>
    </body>
</html>
