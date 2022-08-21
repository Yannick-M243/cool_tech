    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $selectedTag }} Tag</title>
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <h1>{{ $selectedTag }} Tag</h1>
        <a href="{{ url('/') }}">Back</a>
        <h2>Articles</h2>
        <div class="container">
            @foreach ($filtered_articles as $filtered_article)
                <div class="article">
                    <div class="article-title">
                        <a href="{{ url('/article', [$filtered_article->article_id]) }}">
                            <h3>{{ $filtered_article->article_name }}</h3>
                        </a>
                    </div>
                    <div class="article-preview">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita
                            blanditiis non magni voluptates, eligendi aliquid ab vel perspiciatis numquam perferendis
                            veritatis illum omnis eveniet minima autem laboriosam! Laborum, dolores eveniet?
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </body>

    </html>
