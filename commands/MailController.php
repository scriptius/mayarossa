<?php


namespace app\commands;

use app\mail\Mailer;
use yii\console\Controller;

class MailController extends Controller
{
    public function  actionSend($test, $test2)
    {
//        echo 'test';
//        echo $argc;
        echo $test;
        echo '||'.$test2;
//        print_r($argv);
//        $mail = new Mailer();
//        $mail->Send();
//        return $this->render('mail');
    }

}