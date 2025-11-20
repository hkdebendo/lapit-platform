<?php
// app/models/Document.php
namespace App\Models;

use Core\Model;

class Document extends Model
{
    /**
     * Récupère tous les documents à télécharger
     *
     * @return array
     */
    public function getAll(): array
    {
        return $this->fetchAll(
            "SELECT id, name, file_path, created_at
             FROM documents
             ORDER BY name"
        );
    }
}