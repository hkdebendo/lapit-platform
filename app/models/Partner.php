<?php
namespace App\Models;

use Core\Model;

class Partner extends Model
{
    /**
     * Récupère tous les laboratoires partenaires
     *
     * @return array
     */
    public function getAll(): array
    {
        return $this->fetchAll(
            "SELECT 
                id,
                name,
                logo_path,
                university,
                contact_name,
                contact_email,
                contact_phone,
                website_url,
                created_at
             FROM partners
             ORDER BY name"
        );
    }
}
