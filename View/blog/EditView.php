<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">


    <link href="./css/bootstrap.min.css" rel="stylesheet">


</head>

<body class="d-flex h-100 text-center text-white bg-dark">

<PRE>
<?= print_r($post) ?>
</pre>

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">Article</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Cv</a>
                    <a class="nav-link" href="#">Contact</a>
                </nav>
            </div>
        </header>

        <main class="container">
            <h1 class="title">Bienvenue sur mon blog d'articles.</h1>
            <p class="lead">Veuillez découvriez mes articles du plus récents au plus anciens.</p>





            <form method="POST" action="/edit">
                <div class="mb-3">

                    <input type="hidden" name="idpost" value="<?= $post[0]['idpost']?>">

                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $post[0]['title']?>">

                </div>
                <div class="mb-3">
                    <label for="chapo" class="form-label">Chapo</label>
                    <input type="text" class="form-control" id="chapo" name="chapo" value="<?= $post[0]['chapo']?>">
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Content</label>
                    <input type="text" class="form-control" id="content" name="content" value="<?= $post[0]['content']?>">
                </div>
                <button type="submit" class="btn btn-primary" name="edit" value="edit">Submit</button>

            </form>


            <form method="POST" action="/comment/add/<?= $post[0]['idpost']?>">
                <div class="mb-3">
                    <input type="text" class="form-control" id="content" name="content">
                </div>
                <button type="submit" class="btn btn-primary" name="add" value="add">Submit</button>

            </form>




        </main>

        <footer class="mt-auto text-white-50">
            <p>Contact </p>
        </footer>
    </div>



</body>

</html>