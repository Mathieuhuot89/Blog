<?php
function getPosts()
{
    
	try
	{
	    $mysqli = new \mysqli('localhost', 'root', 'Cambodge93250', 'blog');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$result = $mysqli->query("SELECT * FROM post");

	return $result;
    
}

