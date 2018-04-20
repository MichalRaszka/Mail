<?php namespace Dev\Mailing;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

        return [
            'dev\mailing\components\mailing' => 'mailing',
            'dev\mailing\components\import' => 'import'
        ];
        
    }

    public function registerSettings()
    {
    }
}
