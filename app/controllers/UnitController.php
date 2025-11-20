<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\ResearchUnit;

class UnitController extends Controller
{
    /**
     * Affiche la liste des unités de recherche
     */
    public function index()
    {
        $units = $this->model('ResearchUnit')->getAll();
        $this->view('lapit/units', ['units' => $units]);
    }

    /**
     * Affiche le détail d'une unité spécifique
     *
     * @param int $id
     */
    public function show($id) 
    {
        $id = (int) $id;
        $unit      = $this->model('ResearchUnit')->getById($id);
        $unitStaff = $this->model('ResearchUnit')->getStaff($id);

        if (!$unit) {
            // 404 si l'unité n'existe pas
            header("HTTP/1.0 404 Not Found");
            echo "Unité introuvable.";
            exit;
        }

        $this->view('lapit/unit_detail', [
            'unit'      => $unit,
            'unitStaff' => $unitStaff
        ]);
    }
}
