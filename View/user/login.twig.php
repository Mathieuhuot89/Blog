
{% extends '/template.twig.php' %}

{% block content %}
<pre>
{{ error }}
</pre>
<div class="login">
    <form method="post" name="login">
        <input type="text" name="email" placeholder="Email"><br>
        <input type="password" name="password"><br>
        <button type="submit" name="submit">Se connecter</button>
    </form>
</div>
{% endblock %}