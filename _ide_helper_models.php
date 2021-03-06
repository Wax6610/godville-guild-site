<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\GuildMember
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GuildMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GuildMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GuildMember query()
 * @mixin \Eloquent
 */
	class GuildMembers extends \Eloquent {}
}

namespace App{
/**
 * App\Guilds
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Guilds newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Guilds newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Guilds query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Guilds whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Guilds whereName($value)
 */
	class Guilds extends \Eloquent {}
}

namespace App{
/**
 * App\Rulers
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rulers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rulers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rulers query()
 * @mixin \Eloquent
 */
	class Rulers extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\UserStats
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats query()
 * @mixin \Eloquent
 */
	class UserStats extends \Eloquent {}
}

