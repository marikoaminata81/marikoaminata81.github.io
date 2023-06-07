
    <?php
    $retour = mail('marikoaminata81@gmail.com', 'Envoi depuis la page Contact du Portfolio', $_POST['message'], '');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
    