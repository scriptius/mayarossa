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
                'text' => 'Oplatite naonets zakaz'
            ]);

        $url = 'http://mail/index.php?r=mail/send';
//        $ch = curl_init($url);
//        curl_setopt($ch,
//            CURLOPT_CUSTOMREQUEST, 'POST');
//        curl_setopt($ch,
//            CURLOPT_HTTPHEADER,
//            ['Content-Type: application/json']
//        );
//        curl_setopt(
//            $ch,
//            CURLOPT_POSTFIELDS,
//            http_build_query([ 'userId' => 21,
//                'template' => 'remember',
//                'text' => 'Oplatite naonets zakaz'])
//        );
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//
//        $result = curl_exec($ch);
//        curl_close($ch);
//        var_dump( $result);


//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, 'http://mail/test.php');
//        curl_setopt($ch, CURLOPT_HEADER, false);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        // Нужно явно указать, что будет POST запрос
//        curl_setopt($ch, CURLOPT_POST, true);
//        // Здесь передаются значения переменных
//        curl_setopt($ch, CURLOPT_POSTFIELDS, 'a=4&b=7');
//        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
//        curl_setopt($ch, CURLOPT_USERAGENT, 'PHP Bot (http://mysite.ru)');
//        $data = curl_exec($ch);
//        var_dump($data);
//        curl_close($ch);




        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header'  => "Content-type: application/x-www-form-urlencoded\n\n",
//                'request_fulluri' => true,
                'content' => http_build_query([
                    'data' => $json
                ])
            ]
        ]);
// http://mail/index.php?r=mail/send
        $res = file_get_contents('http://mail/index.php?r=mail/send', null, $context);
        print_r($res);





        die;
        $mail = new Mailer();
        $mail->Send();
//        return $this->render('mail');
    }

}