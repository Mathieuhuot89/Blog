
{% extends '/template.twig.php' %}

{% block content %}
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <main class="container">
        <h1 class="title">Demande de contact</h1>
        <div class="contact">
            <table>
            <form method="post" name="contact">
                <tr>  
                    <td>  
                        <label for="email">Email de contact</label>
                    </td>                
                    <td>  
                        <input type="text" name="email" placeholder="Email"><br>
                    </td>
                </tr>
                    <td>  
                        <label for="nom">Nom</label>
                    </td>
                    <td>
                        <input type="text" name="nom" placeholder="Nom"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">Prénom</label>
                    </td>
                    <td>
                        <input type="text" name="prenom" placeholder="Prénom"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="content">Message</label>
                    </td>
                    <td>
                        <textarea name="content" placeholder="Message"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="submit">Envoyer</button>
                    </td>   
                </tr>
            </form>
            </table>
        </div>
    </main>
</div>
{% endblock %}