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
        Schema::table('comments', function (Blueprint $table): void {
            $table->foreign('article_id', 'fk_comments_articles_1')->references('id')->on('articles')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('user_id', 'fk_comments_users_1')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }
};
