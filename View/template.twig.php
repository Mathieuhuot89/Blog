<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Blog Huot Mathieu</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/blog.css" rel="stylesheet">
</head>

<body>
    {% block nav %}
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#">Subscribe</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="#">Home</a>
                <a class="p-2 link-secondary" href="#">Article</a>
                <a class="p-2 link-secondary" href="#">CV</a>
                <a class="p-2 link-secondary" href="#">Contact</a>

            </nav>
        </div>
    </div>
    {% endblock %}

    {% block content %}{% endblock %}

    {% block footer %}
    <footer class="blog-footer">
        <p>Mes réseaux sociaux</p>
        <p>
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </p>
    </footer>
    {% endblock %}
</body>

</html>