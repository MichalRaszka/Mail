<?php namespace Vdomah\Excel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteVdomahExcelEmails extends Migration
{
    public function up()
    {
        Schema::dropIfExists('vdomah_excel_emails');
    }
    
    public function down()
    {
        Schema::create('vdomah_excel_emails', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('email', 191);
        });
    }
}
