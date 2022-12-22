<?php
namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post 
{

    public static function find($slug)
    {
        // Définir le chemin d'accès contenu par le slug pour le passer dans la vue ($path)
        // vérifier que le chemin/slug existe sinon rediriger :
        if (! file_exists($path = resource_path("/posts/{$slug}.html"))) {
            // et non plus $path = __DIR__ . "/../resources/posts/{$slug}.html"

            // Si n'existe pas :
                return ModelNotFoundException();
        }
        
        // stocker dans le cache 20min pour éviter de surcharger la méthode :
        return cache()->remember("posts.{$slug}", now()->addMinutes(20), fn () => file_get_contents($path));

    }
}