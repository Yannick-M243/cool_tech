<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <h1>Cool tech</h1>
    <section id="section1">
        <a href="{{ url('/category') }}">Category</a>
        <a href="{{ url('/tag') }}">Tag</a>
        <div>
            <h3>Filter</h3>
            <div>
                <form action="category" method="POST">
                    @csrf
                    <label for="categoryId">Choose a category:</label>
                    <select name="categoryId" id="category-choice">
                        @foreach ($categories as $category)
                            <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    <button type="submit" name="sbt-cat">Filter by Category </button>
                </form>
            </div>
            <div>
                <form action="tag" method="POST">
                    @csrf
                    <label for="tag">Choose a tag:</label>
                    <select name="tag" id="tag-choice">
                        <option value="ai">AI</option>
                        <option value="google">Google</option>
                        <option value="high-performance">High performance Computing </option>
                        <option value="singularity">Singularity</option>
                    </select>
                    <button type="submit" name="sbt-cat">Filter by Tag </button>
                </form>
            </div>
        </div>
        <h3>Filter</h3>
        <form action="category" method="POST" name="cat-form" id="cat-form">
            @csrf
            <label for="categoryId">Choose a category:</label>
            <select name="categoryId" id="category-choice">
                @foreach ($categories as $category)
                    <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
            <button type="submit" name="sbt-cat">Filter by Category </button>
        </form>
        <h2>Latest articles</h2>
        <div class="container">
            @foreach ($articles as $article)
                <div class="article">
                    <div class="article-title">
                        <a href="{{ url('/article', [$article->article_id]) }}">
                            <h3>{{ $article->article_name }}</h3>
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
    </section>
</body>

</html>
