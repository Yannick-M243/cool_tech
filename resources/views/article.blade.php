<html>

<head>
    <title>{{ $article->article_name }}</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <a href="{{ url('/') }}">Back</a>
    <div class="article-content">
        <h1>{{ $article->article_name }}</h1>
        <p>{{ $article->content }}</p>
        <table>
            <tr>
                <td>Creation date:</td>
                <td>{{ $article->creation_date }}</td>
            </tr>
            <tr>
                <td>Category :</td>
                <td>{{ $category->category_name }}</td>
            </tr>

            @if ($tags->isNotEmpty())
                <tr>
                    <td>Tags :</td>
                    @foreach ($tags as $tag)
                        <td>{{ $tag->tag_name }}</td>
                    @endforeach
                </tr>
            @endif



        </table>

    </div>



</html>
