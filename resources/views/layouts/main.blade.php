<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secret of the pyramids</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/app.css">
    <!-- Styles -->

</head>

<body>

    <header class="container mb-2">

        <h1>Secret of the pyramids</h1>

        <a href='/show/1'>(Re)Start game</a>

    </header>

    <main class="main {{ isset($chapter) && $chapter->is_end == '1' ? 'is-dark' : '' }}">
        @hasSection('content')
            @yield('content')
        @else
            <div class="start-screen">
                <div class="container">

                    <h2>Welcome to the Secret of the Pyramids</h2>
                    <p>The Secret of the Pyramids, released in 1983 is a classic adventure book, allowing the reader to
                        pick
                        and choose the events of the story leading to a variety of alternative endings. Choose Your Own
                        Adventure (CYOA) books like Secret of the Pyramids by Richard Brightfield allow you to play
                        while
                        you read. </p>
                    <p>This story is not my original work. I am sharing it for presentation purposes only.
                        All credit belongs to the original creator. </p>

                </div>
                <a href="/show/1" class="btn btn-sm start-screen__button" role="button">Start your Journey</a>

            </div>
        @endif
    </main>



</body>

</html>
