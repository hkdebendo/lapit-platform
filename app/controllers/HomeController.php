<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\News;
use App\Models\ResearchUnit;
use App\Models\Partner;

class HomeController extends Controller
{
    public function index()
    {
        // 1) Charger les 3 dernières actualités
        $newsModel = $this->model('News');
        $latestNews = $newsModel->getLatest(3);

        // 2) Charger les 4 unités de recherche
        $unitModel = $this->model('ResearchUnit');
        $units      = $unitModel->getAll(4);

        // 3) Charger tous les partenaires
        $partnerModel = $this->model('Partner');
        $partners     = $partnerModel->getAll();

        // 4) Passer les données à la vue
        $this->view('home/index', [
            'latestNews' => $latestNews,
            'units'      => $units,
            'partners'   => $partners,
        ]);
    }
}
