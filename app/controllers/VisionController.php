<?php
// app/controllers/VisionController.php
namespace App\Controllers;

use Core\Controller;
use App\Models\MissionVision;

class VisionController extends Controller
{
    /**
     * Affiche la page Mission & Vision
     */
    public function index()
    {
        // Instancie le modèle et récupère contenu
        $mv = $this->model('MissionVision')->getContent();

        // Passe mission et vision à la vue
        $this->view('lapit/vision', [
            'mission' => $mv['mission'],
            'vision'  => $mv['vision']
        ]);
    }
}
