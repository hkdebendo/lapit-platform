<?php
// app/models/ContactMessage.php
namespace App\Models;

use Core\Model;

class ContactMessage extends Model
{
    /**
     * Enregistre un message de contacts
     *
     * @param array $data
     * @return bool
     */
    public function save(array $data): bool
    {
        $sql = "
            INSERT INTO contact_messages
                (first_name, last_name, email, object, message)
            VALUES
                (:first_name, :last_name, :email, :object, :message)
        ";
        return $this->execute($sql, [
            'first_name' => $data['first_name'],
            'last_name'  => $data['last_name'],
            'email'      => $data['email'],
            'object'     => $data['object'],
            'message'    => $data['message'],
        ]);
    }
}
