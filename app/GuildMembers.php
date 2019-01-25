<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\GuildMembers
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GuildMembers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GuildMembers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GuildMembers query()
 * @mixin \Eloquent
 */
class GuildMembers extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public function guild()
    {
        $this->belongsTo(Guilds::class);
    }

    public function userStats()
    {
        $this->hasMany(UserStats::class);
    }

}
