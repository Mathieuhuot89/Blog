{% extends '/template.twig.php' %}


{% block content %}
<main class="container">
    <pre>
    {% if user %}
        {{ user.getUsername }} a bien été créé.
    {% endif %}

    </pre>
    <div>Formulaire de création utilisateur</div>

    <form method="post" name="add">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit" name="submit">Créer</button>
    </form>

    <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="btn btn-sm btn-outline-secondary" href="/">Retour à l'accueil</a>
    </div>
</main>
{% endblock %}