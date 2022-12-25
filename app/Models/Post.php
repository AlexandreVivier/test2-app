<?php
namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post 
{

    // prérequis pour les yaml front matter :
    public $title;

    public $excerpt;

    public $date;

    public $body;

    public $slug;
    
    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }
    
    // pour récupérer tous les posts dans resources/posts :
    public static function all()
    {
   // Pour des questions d'économie, on met ce bloc function en cache :
        return cache()->rememberForever('posts.all', function() {
    // On utilise collect (ramasse un array et le met dans une collection d'objets):
             return collect(File::files(resource_path("posts")))
     // -> map est la fonction array_map de la collection :
                    ->map(fn ($file) => YamlFrontMatter::parseFile($file))
                    ->map(fn ($document) => new Post(
                        $document->title,
                        $document->excerpt,
                        $document->date,
                        $document->body(),
                        $document->slug,
                    ))
                ->sortByDesc('date');
        });

        /* Ancienne version :       
            //on extrait les files via facades :
            $files = File::files(resource_path("posts"));

            //array_map() fonctionne comme une loop, mais return un nouvel array
            // 1er argu :  la fonction à appliquer à 2nd argu : le tableau que tu passes dans le 1er
            return array_map(fn($file) => $file->getContents(), $files);
            */
    }


    // methode find() pour trouver selon le slug
    public static function find($slug)
    {
        //Nouvelle méthode, avec collection (episode 12):

        $post = static::all();
        // $post est une collection désormais :

        return $post->firstWhere('slug', $slug);
        /* Ancienne méthode, sans collection :
        // Définir le chemin d'accès contenu par le slug pour le passer dans la vue ($path)
        // vérifier que le chemin/slug existe sinon rediriger :
        if (! file_exists($path = resource_path("/posts/{$slug}.html"))) {
            // et non plus $path = __DIR__ . "/../resources/posts/{$slug}.html"

            // Si n'existe pas (prédef) :
                return ModelNotFoundException();
        }
        
        // stocker dans le cache 20min pour éviter de surcharger la méthode :
        return cache()->remember("posts.{$slug}", now()->addMinutes(20), fn () => file_get_contents($path));
        */
    }
}