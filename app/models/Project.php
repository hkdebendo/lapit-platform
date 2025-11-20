<?php
// app/models/Project.php
namespace App\Models;

use Core\Model;

class Project extends Model
{
    /**
     * Récupère tous les projets avec coordinateurs
     * @return array
     */
    public function getAll(): array
    {
        return $this->fetchAll(
            "SELECT p.id, p.title, p.photo_path, p.status, p.start_date, p.end_date, p.financing,
                    GROUP_CONCAT(s.first_name, ' ', s.last_name SEPARATOR ', ') AS coordinators
             FROM projects p
             JOIN project_staff ps ON ps.project_id = p.id AND ps.role_in_proj = 'Coordinateur'
             JOIN staff s ON s.id = ps.staff_id
             GROUP BY p.id
             ORDER BY p.created_at DESC"
        );
    }

    /**
     * Récupère un projet par son ID, avec équipe complète
     * @param int $id
     * @return array|null
     */
    public function getById(int $id): ?array
    {
        return $this->fetch(
            "SELECT p.*, 
                    GROUP_CONCAT(DISTINCT CONCAT(coord.first_name, ' ', coord.last_name, ' (', coord.position, ')') SEPARATOR '<br>') AS coordinators,
                    GROUP_CONCAT(DISTINCT CONCAT(member.first_name, ' ', member.last_name, ' (', ps.role_in_proj, ')') SEPARATOR '<br>') AS team
             FROM projects p
             LEFT JOIN project_staff ps ON ps.project_id = p.id
             LEFT JOIN staff coord ON coord.id = ps.staff_id AND ps.role_in_proj = 'Coordinateur'
             LEFT JOIN staff member ON member.id = ps.staff_id
             WHERE p.id = :id
             GROUP BY p.id",
            ['id' => $id]
        );
    }
}