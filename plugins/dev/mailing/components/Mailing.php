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
        $vars = ['name' => 'Test', 'email' => 'michr21@gmail.com','content' => Input::get('about')];
        // for ($x = 0; $x <= 10; $x++) {
            Mail::send('dev.mailing::mail.message', $vars, function($message) {
                
                            $message->to('michr21@gmail.com', 'Michal');
                     
                            
                            $message->subject('mailing');
                
                        });
            Mail::send('dev.mailing::mail.message', $vars, function($message) {
                            
                                       
                                        $message->to('d-o-m-i-n@tlen.pl', 'Domin');
                                        
                                        $message->subject('mailing');
                            
                                    });
        
    }
}


