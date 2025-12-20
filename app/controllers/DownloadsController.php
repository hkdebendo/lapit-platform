<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Document;

class DownloadsController extends Controller
{
    /**
     * Affiche la liste des documents téléchargeables
     */
    public function index()
    {
        $docs = $this->model('Document')->getAll();
        $this->view('lapit/downloads', ['documents' => $docs]);
    }
}