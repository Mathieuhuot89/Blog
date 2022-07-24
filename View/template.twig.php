<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.1formatik.com/images/favicon/favicon-16x16.png">  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Blog Huot Mathieu</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">
</head>

<body>
    {% block nav %}
    <div class="container">
        <header class="blog-header py-3">
            <div class="header">
            <div class="logo-block">
                <img src="/img/logo2.png" alt="Logo" class="logo">
            </div>
        <div class="banniere"></div>
    </div>
            <div class="row flex-nowrap justify-content-between align-items-center">
                {% if email %}
                    Bienvenue {{ email }}
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <a class="btn btn-sm btn-outline-secondary" href="/user/logout">Se déconnecter</a>
                    </div>
                {% else %}
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <a class="btn btn-sm btn-outline-secondary" href="/user/login">Se connecter</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <a class="btn btn-sm btn-outline-secondary" href="/user/add">S'inscrire</a>
                    </div>
                {% endif %}
            
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="/">Accueil</a>
                <a class="p-2 link-secondary" href="/post/list">Articles</a>
                <a class="p-2 link-secondary" href="/img/cv.pdf" download>Mon CV</a>
                <a class="p-2 link-secondary" href="/user/addContact">Contact</a>

            </nav>
        </div>
    </div>
    {% endblock %}

    {% block content %}{% endblock %}

    {% block footer %}
    <main class="container">
        <footer class="container">
            <p>Mes réseaux sociaux</p>
            <p>
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
            </p>
        </footer>
    </main>
    {% endblock %}
</body>

</html>