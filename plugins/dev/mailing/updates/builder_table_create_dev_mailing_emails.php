<?php namespace Dev\Mailing\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDevMailingEmails extends Migration
{
    public function up()
    {
        Schema::create('dev_mailing_emails', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('email');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dev_mailing_emails');
    }
}
