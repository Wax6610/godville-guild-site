<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
/**
 * App\GuildMember
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GuildMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GuildMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GuildMember query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GuildMember whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GuildMember whereName($value)
 * @mixin \Eloquent
 */
class GuildMember extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];


    public function stats()
    {
        return $this->hasMany('App\UserStats');
    }

    public function todayStats(){
        return $this->stats()->whereDate('created_at',Carbon::today());
    }

}
