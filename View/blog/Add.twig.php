{% extends '/template.twig.php' %}


{% block content %}
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <main class="container">
            <h1 class="title">Ajouter un post</h1>

            <form method="POST" action="/post/add"> 
                <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" >
                    
                </div>
                <div class="mb-3">
                    <label for="chapo" class="form-label">Chapo</label>
                    <input type="text" class="form-control" id="chapo" name="chapo" >
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Contenu</label>
                    <input type="text" class="form-control" id="content" name="content" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </main>
    </div>

{% endblock %}