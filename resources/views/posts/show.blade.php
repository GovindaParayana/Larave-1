<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Judul: {{ $post[1] }}</title>
    <!-- CSS ONLY -->
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="{{ asset('css/blog.css') }}" rel="stylesheet" crossorigin="anonymous">
    <!-- Java Script Only -->
    <script src="{{ asset ('bootstrap-5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1"> {{ $post[1] }}</h2>
            <p class="blog-post-meta">{{ date("d M Y H:i", strtotime($post[3])) }}</p>

            <p>
                {{ $post[2] }}
            </p>
        </article>
        <a href="{{ url("posts") }}"></a>
    </div>
</body>

</html>