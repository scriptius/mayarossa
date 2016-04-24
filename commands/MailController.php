<?php


namespace app\commands;

use app\mail\Mailer;
use yii\console\Controller;

class MailController extends Controller
{
    protected function actionValidateEmail($email)
    {
        return preg_match("/^[a-z0-9_-]{1,20}@(([a-z0-9-]+\.)+(com|net|org|mil|" .
            "edu|gov|arpa|info|biz|inc|name|[a-z]{2})|[0-9]{1,3}\.[0-9]{1,3}\.[0-" .
            "9]{1,3}\.[0-9]{1,3})$/is", $email) ? true : false;

    }

    public function actionSend()
    {
        $json = json_encode(
            [
                'userId' => 21,
                'template' => 'remember',
                'text' => 'Oplatite nakonets zakaz'
            ]);

        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header'  => "Content-type: application/x-www-form-urlencoded\n\n",
                'content' => http_build_query([
                    'data' => $json
                ])
            ]
        ]);
        
        $res = file_get_contents('http://mail/index.php?r=mail/send', null, $context);
        var_dump($res);
    }

}