<html>

<head>
    <title>{{ $article->article_name }}</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <section>
        <a href="{{ url('/') }}" class="btn btn-secondary my-4">Home</a>
        <div class="article-content">
            <h1 class="my-3">{{ $article->article_name }}</h1>
            <p class="my-3">{{ $article->content }}</p>
            <table class="my-3">
                <tr>
                    <td>Creation date:</td>
                    <td>{{ $article->creation_date }}</td>
                </tr>
                <tr>
                    <td>Category :</td>
                    <td>{{ $category->category_name }}</td>
                </tr>

                <!--checking if the article has a tag before adding the tag row-->
                @if ($tags->isNotEmpty())
                    <tr>
                        <td>Tags :</td>
                        @foreach ($tags as $tag)
                            <td>{{ $tag->tag_name }}</td>
                        @endforeach
                    </tr>
                @endif

            </table>

            <h2 class="p-3">Add tagg</h2>
            <form action="{{ url('/article.addtag') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="p-2"><input type="checkbox" name="tags[]"
                            value="High-Performance Computing">High-Performance
                        Computing</label>
                    <label class="p-2"><input type="checkbox" name="tags[]" value="AI">AI</label>
                    <label class="p-2"><input type="checkbox" name="tags[]" value="Google">Google</label>
                    <label class="p-2"><input type="checkbox" name="tags[]" value="Yellow">Yellow</label>
                    <label class="p-2"><input type="checkbox" name="tags[]" value="Singularity">Singularity</label>
                    <input type="hidden" value="{{ $article->article_id }}" name="article-id">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary p-3">Save</button>
                </div>
            </form>
        </div>
    </section>
    <x-cookie-alert />
    <x-footer />
</body>

</html>
