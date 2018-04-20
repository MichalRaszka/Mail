<?php namespace Vdomah\Excel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVdomahExcelEmails extends Migration
{
    public function up()
    {
        Schema::create('vdomah_excel_emails', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vdomah_excel_emails');
    }
}
