<<<<<<< HEAD
<?php

require('./sendgrid-php/sendgrid-php.php');

$email_site = 'contato@rafaeldesign.com.br';
$nome_site = 'RafaelDesign';

$email_user = $_POST['email'];
$nome_user = $_POST['nome'];

$body_content = '';
foreach( $_POST as $field => $value) {
  if( $field !== 'leaveblank' && $field !== 'dontchange' && $field !== 'enviar') {
    $sanitize_value = filter_var($value, FILTER_SANITIZE_STRING);
    $body_content .= $field . ': ' . $value . '\n';
  }
}

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom($email_site, $nome_site);
$email->addTo($email_site, $nome_site);

$email->setReplyTo($email_user, $nome_user);

$email->setSubject('Formulário RafaelDesign');
$email->addContent('text/plain', $body_content);

$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
=======
<?php

require('./sendgrid-php/sendgrid-php.php');

$email_site = 'contato@rafaeldesign.com.br';
$nome_site = 'RafaelDesign';

$email_user = $_POST['email'];
$nome_user = $_POST['nome'];

$body_content = '';
foreach( $_POST as $field => $value) {
  if( $field !== 'leaveblank' && $field !== 'dontchange' && $field !== 'enviar') {
    $sanitize_value = filter_var($value, FILTER_SANITIZE_STRING);
    $body_content .= $field . ': ' . $value . '\n';
  }
}

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom($email_site, $nome_site);
$email->addTo($email_site, $nome_site);

$email->setReplyTo($email_user, $nome_user);

$email->setSubject('Formulário RafaelDesign');
$email->addContent('text/plain', $body_content);

$sendgrid = new \SendGrid('');
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
>>>>>>> 4592c8e81c4b4abb0bbebc911fa700ff5100813c
