<?php
// app/controllers/StaffController.php
namespace App\Controllers;

use Core\Controller;
use App\Models\Staff;

class StaffController extends Controller
{
    /**
     * Liste des enseignants-chercheurs
     */
    public function index()
    {
        $researchers = $this->model('Staff')->getResearchers();
        $this->view('staff/index', ['researchers' => $researchers]);
    }

    /**
     * Fiche d'un enseignant-chercheur
     * @param int $id
     */
    public function show($id)
    {
        $id = (int)$id;
        $staff = $this->model('Staff')->getById($id);
        if (!$staff) {
            header('HTTP/1.0 404 Not Found');
            echo 'Chercheur introuvable.';
            exit;
        }

        $projects      = $this->model('Staff')->getProjects($id);
        $supervisions  = $this->model('Staff')->getSupervisions($id);
        $publications  = $this->model('Staff')->getPublications($id);

        $this->view('staff/show', [
            'staff'       => $staff,
            'projects'    => $projects,
            'supervisions'=> $supervisions,
            'publications'=> $publications
        ]);
    }
}
