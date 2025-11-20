<?php
// app/controllers/PhotoAlbumController.php
namespace App\Controllers;

use Core\Controller;
use App\Models\PhotoAlbum;

class PhotosController extends Controller
{
    /**
     * Liste tous les albums photo
     */
    public function index()
    {
        $albums = $this->model('PhotoAlbum')->getAll();
        $this->view('photos/index', ['albums' => $albums]);
    }

    /**
     * Affiche les photos d'un album
     * @param int $id
     */
    public function show($id)
    {
        $data = $this->model('PhotoAlbum')->getById((int)$id);
        if (!$data) {
            header('HTTP/1.0 404 Not Found');
            echo 'Album introuvable.';
            exit;
        }
        $this->view('photos/show', [
            'album'  => $data['album'],
            'photos' => $data['photos']
        ]);
    }
}
