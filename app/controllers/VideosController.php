<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\VideoAlbum;

class VideosController extends Controller
{
    /** Liste tous les albums vidéo */
    public function index()
    {
        $albums = $this->model('VideoAlbum')->getAll();
        $this->view('videos/index', ['albums' => $albums]);
    }

    /** Affiche les vidéos d'un album */
    public function show($id)
    {
        $data = $this->model('VideoAlbum')->getById((int)$id);
        if (!$data) {
            header('HTTP/1.0 404 Not Found');
            echo 'Album introuvable.';
            exit;
        }
        $this->view('videos/show', [
            'album'  => $data['album'],
            'videos' => $data['videos']
        ]);
    }
}
