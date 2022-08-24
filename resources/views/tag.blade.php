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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>

    <body>
        <section>
            <h1>{{ $selectedTag }} Tag</h1>
            <a href="{{ url('/search') }}">Back</a>
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
                            <p>{{ Str::of($filtered_article->content)->limit(150) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <x-cookie-alert />
        <x-footer />
    </body>

    </html>
