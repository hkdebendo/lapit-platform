<?php
// app/models/MissionVision.php
namespace App\Models;

use Core\Model;

class MissionVision extends Model
{
    /**
     * Récupère la mission et la vision du LaPIT
     *
     * @return array ['mission' => string, 'vision' => string]
     */
    public function getContent(): array
    {
        $row = $this->fetch(
            "SELECT mission, vision
               FROM lapit_info
              LIMIT 1"
        );

        // Assure toujours un tableau avec clefs
        return [
            'mission' => $row['mission'] ?? '',
            'vision'  => $row['vision']  ?? ''
        ];
    }
}
