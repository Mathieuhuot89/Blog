{% extends 'template.twig.php' %}


{% block content %}
<div class="container">
    <h4>Contenu du post</h4>
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative full_content_post">
        <div class="col p-4 d-flex flex-column position-static">
            <div class="head_post">
                <h3 class="mb-0 text-primary">{{ post.title }}</h3>
                <div class="mb-1 text-muted">{{ post.date_creation }}</div>
            </div>
            <div class="content_post">
                <p>{{ author.username }}</p>
                <p class="card-text mb-auto">{{ post.chapo }}</p>
                <p class="card-text mb-auto">{{ post.content }}</p>
            </div>
            <div class="footer_post">
                <span><a href="/post/edit/{{ post.idpost }}" class="">Editer le post</a></span>
                <span><a href="/post/delete/{{ post.idpost }}" class="">Supprimer le post</a></span>
                <span><a href="/" class="">Retourner à la page d'accueil</a></span>
            </div>
        </div>
        <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
            </svg>
        </div>
    </div>
    
    <h3>Commentaires</h3>
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative add_comment">
        <div class="comment">
            {% for comment in comments %}
                <p class="commentaire"> {{ comment.content }} </p>
            {% endfor %}
        </div>
        <form method="POST" action="/comment/add/{{ post.idpost }}"> 
            <div class="mb-3">   
                <label>Ajouter un commentaire</label>                    
                <textarea class="form-control" id="title" name="content" ></textarea>
                <button type="submit" class="btn btn-primary">Ajouter</button>                                          
            </div>
        </form>
    </div>
</div
{% endblock %}
