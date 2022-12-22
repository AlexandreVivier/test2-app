<?php
namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post 
{
    // pour récupérer tous les posts dans resources/posts :
    public static function all()
    {
            //on extrait les files via facades :
            $files = File::files(resource_path("posts"));

            //array_map() fonctionne comme une loop, mais return un nouvel array
            // 1er argu :  callback 2nd argu : ce que tu boucles, passe dans le premier
            return array_map(fn($file) => $file->getContents(), $files);
    }


    // methode find() pour trouver selon le slug
    public static function find($slug)
    {
        // Définir le chemin d'accès contenu par le slug pour le passer dans la vue ($path)
        // vérifier que le chemin/slug existe sinon rediriger :
        if (! file_exists($path = resource_path("/posts/{$slug}.html"))) {
            // et non plus $path = __DIR__ . "/../resources/posts/{$slug}.html"

            // Si n'existe pas (prédef) :
                return ModelNotFoundException();
        }
        
        // stocker dans le cache 20min pour éviter de surcharger la méthode :
        return cache()->remember("posts.{$slug}", now()->addMinutes(20), fn () => file_get_contents($path));

    }
}