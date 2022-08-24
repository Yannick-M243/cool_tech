<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <section>
        <a href="{{ url('/') }}" class="btn btn-secondary my-4">Home</a>
        <h1>Search</h1>
        <h2>Are you looking for an article?</h2>
        <div class="container d-flex justify-content-center flex-column align-items-center">
            <div class="form-group p-2 w-75">
                <form action="search.findById" method="POST">
                    @csrf
                    <label for="article" class="my-2">Find Article by ID</label>
                    <input type="text" name="article" class="form-control my-2">
                    <button type="submit" class="btn btn-primary my-2">Search by ID</button>
                </form>
                @if ($notFound)
                    <div class="alert alert-danger h-25">
                        <span>File not found ! Try with another article ID</span>
                    </div>
                @endif
            </div>
            <div class="form-group p-2 w-75">
                <form action="search.findByCat" method="POST">
                    @csrf
                    <label class="my-2" for="categoryId">Choose a category</label>
                    <select name="categoryId" id="category-choice" class="form-control my-2">
                        @foreach ($categories as $category)
                            <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary my-2">Search by Category </button>
                </form>
            </div>
            <div class="form-group p-2 w-75">
                <form action="search.findByTag" method="POST">
                    @csrf
                    <label for="tag" class="my-2">Choose a tag</label>
                    <select name="tag" id="tag-choice" class="form-control my-2">
                        <option value="1">AI</option>
                        <option value="2">Google</option>
                        <option value="3">High-Performance
                            Computing</option>
                        <option value="4">Singularity</option>
                    </select>
                    <button type="submit" class="btn btn-primary my-2">Search by Tag </button>
                </form>
            </div>
        </div>
    </section>
    <x-cookie-alert />
    <x-footer />
</body>

</html>
