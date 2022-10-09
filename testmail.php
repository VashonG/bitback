<?php

require_once  __DIR__ .'/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo "Mail Credentials";
echo "\n MAIL_HOST => " . getenv('MAIL_HOST');
echo "\n MAIL_PORT => " . getenv('MAIL_PORT');
echo "\n MAIL_USERNAME => " . getenv('MAIL_USERNAME');
echo "\n MAIL_PASSWORD => " . getenv('MAIL_PASSWORD');
echo "\n MAIL_FROM_ADDRESS => " . getenv('MAIL_FROM_ADDRESS');
echo "\n MAIL_FROM_NAME => " . getenv('MAIL_FROM_NAME');
echo "\n\n\n ";

$transport = (new Swift_SmtpTransport( getenv('MAIL_HOST') , getenv('MAIL_PORT') ))
  ->setUsername(getenv('MAIL_USERNAME'))
  ->setPassword(getenv('MAIL_PASSWORD'))
;

$mailer = new Swift_Mailer($transport);


$logger = new Swift_Plugins_Loggers_EchoLogger();
$mailer->registerPlugin(new Swift_Plugins_LoggerPlugin($logger));


$message = (new Swift_Message('Testing Email from '. getenv('APP_NAME') ))
  ->setFrom([ getenv('MAIL_FROM_ADDRESS') =>  getenv('MAIL_FROM_NAME') ])
  ->setTo([getenv('MAIL_FROM_ADDRESS')])
  ->setBody('Hello , Tested. OK. ');

$result = $mailer->send($message);