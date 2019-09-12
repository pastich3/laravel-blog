<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConfirmationNotificationColumnsToContactInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact_infos', function (Blueprint $table) {
            $table->boolean('confirmation_sent')->default(0)->after('message');
            $table->boolean('notification_sent')->default(0)->after('message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_infos', function (Blueprint $table) {
            $table->dropColumn('notification_sent');
            $table->dropColumn('confirmation_sent');
        });
    }
}
