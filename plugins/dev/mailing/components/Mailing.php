<?php namespace dev\mailing\components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;

class Mailing extends ComponentBase

{

    public function componentDetails()

        {

            return[
                'name' => 'Mailing',
                'description' => 'Mailing app'
            ];

        }

    public function onSend()
    {
        set_time_limit(0);
        $vars = ['name' => 'Test', 'email' => 'michal.raszka@outlook.com','content' => Input::get('content')];
        for ($x = 0; $x <= 1000; $x++) {
            Mail::send('dev.mailing::mail.message', $vars, function($message) {
                
                            $message->to('michr21@gmail.com', 'Michal');
                            $message->subject('mailing');
                
                        });
        } 

        
    }
}
