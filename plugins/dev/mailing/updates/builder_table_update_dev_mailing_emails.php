<?php namespace Dev\Mailing\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDevMailingEmails extends Migration
{
    public function up()
    {
        Schema::table('dev_mailing_emails', function($table)
        {
            $table->string('email', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('dev_mailing_emails', function($table)
        {
            $table->string('email', 191)->nullable(false)->change();
        });
    }
}
