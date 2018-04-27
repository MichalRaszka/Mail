<?php namespace dev\mailing\components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Flash;
use DB;


class Mailing extends ComponentBase

{

    public function componentDetails()

        {

            return[
                'name' => 'Mailing',
                'description' => 'Mailing app'
            ];

        }
        public function onRun() {
            $users = Db::table('dev_mailing_emails')
            ->select('email')
            ->where('active', '=', 1)
            ->get();
            $this->page['size2'] = $users;
           }

    public function onSend()
    {
       
        set_time_limit(0);
        $users = Db::table('dev_mailing_emails')
        ->select('email')
        ->where('active', '=', 1)
        ->get();


        $vars = ['name' => 'Test', 'email' => 'michr21@gmail.com','content' => Input::get('about')];
        foreach ($users as $value){
           
       
           // for ($x = 0; $x <= 10; $x++) {
                //$this->page['size3'] = $x;
                $test=$value->email;
                Mail::send('dev.mailing::mail.message', $vars, function($message) use ($test) {
                    
                                $message->to($test, 'Michal');
                        
                                
                                $message->subject('mailing');
                    
                            });
                
            //}
        }
        Flash::success('Wiadomość wysłana poprawnie!');
         
    }
}


