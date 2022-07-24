{% extends '/template.twig.php' %}


{% block content %}

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <main class="container">
          <h1 class="title">Liste des articles</h1>
          <p class="lead">Veuillez découvriez mes articles du plus récents au plus anciens.</p>

      <div class="row mb-2">
        {% for post in posts %}
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0 text-primary">{{ post.title }}</h3>
              <div class="mb-1 text-muted">{{ post.date_creation }}</div>
              <p class="card-text mb-auto">{{ post.chapo }}</p>
              <a href="/post/show/{{ post.idpost }}" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
              </svg>
            </div>
          </div>
        </div>
        {% endfor %}
      </div>
      <div class="add_new_post">
        <a href="/post/add"><button type="button" class="btn btn-link">Ajouter un post</button> </a>
      </div>
    </main>
</div>
{% endblock %}