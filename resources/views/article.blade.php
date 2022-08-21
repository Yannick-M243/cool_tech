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

        <h3>Add tagg</h3>
        <form method="post" action="{{ url('/article') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label><strong>Category :</strong></label><br>
                <label><input type="checkbox" name="tags[]" value="High-Performance Computing">High-Performance
                    Computing</label>
                <label><input type="checkbox" name="tags[]" value="AI">AI</label>
                <label><input type="checkbox" name="tags[]" value="Google">Google</label>
                <label><input type="checkbox" name="tags[]" value="Yellow">Yellow</label>
                <label><input type="checkbox" name="tags[]" value="Singularity">Singularity</label>
                <input type="hidden" value="{{$article->article_id}}" name="article-id">
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success btn-sm">Save</button>
            </div>

        </form>

    </div>



</html>
