<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Liste des actualités
     */
    public function index()
    {
        $all = $this->model('News')->getAll();
        $this->view('news/index', ['newsList' => $all]);
    }

    /**
     * Détail d'une actualité
     * @param int $id
     */
    public function show($id)
    {
        $item = $this->model('News')->getById((int)$id);
        if (!$item) {
            header("HTTP/1.0 404 Not Found");
            echo "Actualité introuvable.";
            exit;
        }
        $this->view('news/show', ['news' => $item]);
    }
}
