<?php

declare(strict_types=1);

/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D Community Edition is open-sourced software licensed under the GNU Affero General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D Community Edition
 *
 * @author     HDVinnie <hdinnovations@protonmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('warnings', function (Blueprint $table): void {
            $table->increments('id');
            $table->integer('user_id')->index('warnings_user_id_foreign');
            $table->integer('warned_by')->index('warnings_warned_by_foreign');
            $table->bigInteger('torrent')->unsigned()->index('warnings_torrent_foreign');
            $table->text('reason');
            $table->dateTime('expires_on')->nullable();
            $table->boolean('active')->default(0);
            $table->timestamps();
        });
    }
};
