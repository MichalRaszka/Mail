<?php namespace Dev\Mailing\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDevMailingEmails2 extends Migration
{
    public function up()
    {
        Schema::table('dev_mailing_emails', function($table)
        {
            $table->boolean('active')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('dev_mailing_emails', function($table)
        {
            $table->dropColumn('active');
        });
    }
}
