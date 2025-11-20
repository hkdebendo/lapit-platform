<?php
// app/models/Administrator.php
namespace App\Models;

use Core\Model;

class Administrator extends Model
{
    /**
     * Récupère tous les administrateurs du LaPIT
     *
     * @return array
     */
    public function getAll(): array
    {
        return $this->fetchAll(
            "SELECT 
                first_name, 
                last_name, 
                position, 
                email, 
                phone, 
                photo_path 
             FROM staff
             WHERE role = 'admin'
             ORDER BY last_name, first_name"
        );
    }
}
