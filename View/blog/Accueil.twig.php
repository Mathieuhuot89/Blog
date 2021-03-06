{% extends '/template.twig.php' %}


{% block content %}


<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Huot Mathieu</h1>
      <p class="lead my-3">Bienvenue sur mon blog ! Vous y découvriez mes articles blog post et ce dont je suis
        capable dans ce milieu.</p>
    </div>
  </div>

  <div class="row mb-2 blog">
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
{% endblock %}