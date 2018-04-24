<?php namespace Dev\Mailing\Components; 

use Cms\Classes\ComponentBase;
use Redirect;
use dev\mailing\Models\Emails as Emails;
use Input;

class import extends ComponentBase

{

    public function componentDetails()

        {

            return[
                'name' => 'Import',
                'description' => 'Import z excela'
            ];

       }
    public function onSave()
    {
    	$handle = fopen(Input::file('file'), "r");
		$header = true;

		while ($csvLine = fgetcsv($handle, 1000, ",")) {

   		 if ($header) {
        $header = false;
   		 } else {
        Emails::create([
            'email' => $csvLine[0] . ' ' . $csvLine[1],
            
        ]);
    }
}
    	 return Redirect::to('');
    }

}
