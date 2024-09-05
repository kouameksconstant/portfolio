<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Sujet de l'email
    $subject = "Nouveau message de $nom";

    // Contenu de l'email
    $body = "Nom: $nom\nEmail: $email\n\nMessage:\n$message";

    // Destinataire de l'email (changez ceci par votre adresse email)
    $to = "kouameksconstant@outlook.fr";

    // En-têtes de l'email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Merci pour votre message ! Nous vous contacterons bientôt.";
    } else {
        echo "Une erreur s'est produite. Veuillez réessayer plus tard.";
    }
}
?>
