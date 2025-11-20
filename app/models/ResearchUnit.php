<?php
namespace App\Models;

use Core\Model;

class ResearchUnit extends Model
{
    /**
     * Récupère toutes les unités de recherche
     *
     * @return array
     */
    public function getAll(): array
    {
        return $this->fetchAll(
            "SELECT 
                id,
                title,
                description_short,
                photo_path,
                description_full,
                created_at
             FROM research_units
             ORDER BY created_at DESC"
        );
    }

    /**
     * Récupère les détails d'une unité par son ID
     *
     * @param int $id
     * @return array|null
     */
    public function getById(int $id): ?array
    {
        return $this->fetch(
            "SELECT 
                id,
                title,
                description_short,
                description_full,
                photo_path,
                created_at
             FROM research_units
             WHERE id = :id",
            ['id' => $id]
        );
    }

    /**
     * Récupère les membres associés à une unité
     *
     * @param int $unit_id
     * @return array
     */
    public function getStaff(int $unit_id): array
    {
        return $this->fetchAll(
            "SELECT 
                s.first_name,
                s.last_name,
                us.role_in_unit
             FROM unit_staff us
             JOIN staff s ON s.id = us.staff_id
             WHERE us.unit_id = :uid",
            ['uid' => $unit_id]
        );
    }
}
