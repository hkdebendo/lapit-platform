<?php
// app/controllers/ContactController.php
namespace App\Controllers;

use Core\Controller;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    /** Affiche le formulaire de contact */
    public function index()
    {
        $this->view('contact/index');
    }

    /** Traite la soumission du formulaire */
    public function send()
{
    $errors = [];
    $first = trim($_POST['first_name'] ?? '');
    $last  = trim($_POST['last_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $msg   = trim($_POST['message'] ?? '');
    $obj   = trim($_POST['object'] ?? '');

    // 1) Validation classique
    if (!$first) $errors[] = 'Le prénom est requis.';
    if (!$last)  $errors[] = 'Le nom est requis.';
    if (!$obj)  $errors[] = 'L\'object de votre message est requis.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email invalide.';
    if (!$msg)   $errors[] = 'Le message ne peut être vide.';

    // 2) Vérification reCAPTCHA
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
    if (!$recaptchaResponse) {
        $errors[] = 'Veuillez cocher la case reCAPTCHA.';
    } else {
        // Envoi de la requête à Google
        $secret   = config('recaptcha_secret_key');
        $response = file_get_contents(
            'https://www.google.com/recaptcha/api/siteverify?secret='
            . urlencode($secret)
            . '&response=' . urlencode($recaptchaResponse)
            . '&remoteip=' . $_SERVER['REMOTE_ADDR']
        );
        $result = json_decode($response, true);
        if (empty($result['success'])) {
            $errors[] = 'La vérification reCAPTCHA a échoué. Veuillez réessayer.';
        }
    }

    // 3) Affichage ou enregistrement
    if ($errors) {
        $this->view('contact/index', ['errors' => $errors, 'old' => $_POST]);
        return;
    }

    $model = $this->model('ContactMessage');
    if ($model->save([
        'first_name' => $first,
        'last_name'  => $last,
        'email'      => $email,
        'object'     => $obj,
        'message'    => $msg,
    ])) {
        $this->view('contact/thankyou');
    } else {
        $errors[] = 'Une erreur est survenue, veuillez réessayer.';
        $this->view('contact/index', ['errors' => $errors, 'old' => $_POST]);
    }
}
    
}
