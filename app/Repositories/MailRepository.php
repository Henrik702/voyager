<?php

namespace App\Repositories;

use App\Contracts\BaseInterface;
use App\Mail\SupportMail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class MailRepository implements BaseInterface
{
    protected $model;

    public function __construct(\App\Models\Mail $model)
    {
        $this->model = $model;
    }

    public function sendEmail($params){
        $name = $params['name'];
        $email = $params['email'];
        $message = $params['message'];
        $subject = $params['subject'];

        return Mail::to(env('MAIL_USERNAME'))->send(
            new SupportMail($name,$email,$subject,$message)
        );
    }

}
