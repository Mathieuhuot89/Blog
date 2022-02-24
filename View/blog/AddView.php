<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    

    <link href="./css/bootstrap.min.css" rel="stylesheet">


</head>

<body class="d-flex h-100 text-center text-white bg-dark">

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

            
            <?php 
                if(isset($postObjet)){
                    echo '<h2>'. $postObjet->getTitle().'</h2>';
                    echo '<div>'. $postObjet->getChapo().'</div>';
                    echo '<div>'. $postObjet->getComment().'</div>';  
                    echo '<div>'.$postObjet->getDateCreation()->format("Y-M-d H:i:s").'</div>';
                }
            ?>
            <form method="POST" action="index.php?action=add"> 
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" >
                    
                </div>
                <div class="mb-3">
                    <label for="chapo" class="form-label">Chapo</label>
                    <input type="text" class="form-control" id="chapo" name="chapo" >
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Comment</label>
                    <input type="text" class="form-control" id="comment" name="comment" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>





        </main>

        <footer class="mt-auto text-white-50">
            <p>Contact </p>
        </footer>
    </div>



</body>

</html>