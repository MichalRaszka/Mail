<?php namespace Dev\Mailing\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDevMailingEmails3 extends Migration
{
    public function up()
    {
        Schema::table('dev_mailing_emails', function($table)
        {
            $table->boolean('active')->default(1)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dev_mailing_emails', function($table)
        {
            $table->boolean('active')->default(null)->change();
        });
    }
}
