<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
class Guilds extends Model
{
    public $timestamps = false;


    protected $fillable = [
        'name',
    ];


    public function guildmember()
    {
        $this->hasMany(GuildMembers::class);
    }
}
