<?php
// app/controllers/DirectionController.php
namespace App\Controllers;

use Core\Controller;
use App\Models\Administrator;

class DirectionController extends Controller
{
    /**
     * Affiche la page Direction du LaPIT
     */
    public function index()
    {
        // Charger tous les administrateurs
        $admins = $this->model('Administrator')->getAll();

        // Afficher la vue en passant les données
        $this->view('lapit/direction', [
            'administrators' => $admins
        ]);
    }
}
