<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\Partner;

class PartnerController extends Controller
{
    /**
     * Affiche la liste des laboratoires partenaires
     */
    public function index()
    {
        $partners = $this->model('Partner')->getAll();
        $this->view('lapit/partners', [
            'partnersList' => $partners
        ]);
    }
}
