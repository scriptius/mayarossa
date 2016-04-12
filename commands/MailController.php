<?php


namespace app\commands;

use app\mail\Mailer;
use yii\console\Controller;

class MailController extends Controller
{
    public function  actionSend()
    {
        $mail = new Mailer();
        $mail->Send();
        return $this->render('mail');
    }

}