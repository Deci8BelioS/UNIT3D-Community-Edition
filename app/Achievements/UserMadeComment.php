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

namespace App\Achievements;

use Assada\Achievements\Achievement;

class UserMadeComment extends Achievement
{
    /**
     * The achievement name.
     *
     * @var string
     */
    public $name = 'FirstComment';

    /**
     * A small description for the achievement.
     *
     * @var string
     */
    public $description = 'Congratulations! You have made your first comment!';
}
