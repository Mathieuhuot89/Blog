{% extends '/template.twig.php' %}

{% block content %}




<main class="container">
            <h1 class="title">Bienvenue sur mon blog d'articles.</h1>
            <p class="lead">Veuillez découvriez mes articles du plus récents au plus anciens.</p>





            <form method="POST" action="/post/edit">
                <div class="mb-3">

                    <input type="hidden" name="idpost" value="{{ post.idpost }}" >

                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ post.title }}">

                </div>
                <div class="mb-3">
                    <label for="chapo" class="form-label">Chapo</label>
                    <input type="text" class="form-control" id="chapo" name="chapo" value="{{ post.chapo }}">
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Content</label>
                    <input type="text" class="form-control" id="content" name="content" value="{{ post.content }}">
                </div>
                <button type="submit" class="btn btn-primary" name="edit" value="edit">Submit</button>

            </form>





    </main>
    {% endblock %}