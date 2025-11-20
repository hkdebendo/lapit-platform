<?php
// app/controllers/ProjectController.php
namespace App\Controllers;

use Core\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Affiche la liste des projets
     */
    public function index()
    {
        $projects = $this->model('Project')->getAll();
        $this->view('projects/index', ['projects' => $projects]);
    }

    /**
     * Affiche le détail d'un projet
     * @param int $id
     */
    public function show($id)
    {
        $proj = $this->model('Project')->getById((int)$id);
        if (!$proj) {
            header('HTTP/1.0 404 Not Found');
            echo 'Projet introuvable.';
            exit;
        }
        $this->view('projects/show', ['project' => $proj]);
    }
}