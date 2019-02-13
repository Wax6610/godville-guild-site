<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserStats
 *
 * @property int $id
 * @property int $guild_member_id
 * @property int $bricks_cnt
 * @property int $wood_cnt
 * @property int $ark_f
 * @property int $ark_m
 * @property int $arena_won
 * @property int $arena_lost
 * @property int $savings
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats whereArenaLost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats whereArenaWon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats whereArkF($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats whereArkM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats whereBricksCnt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats whereGuildMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats whereSavings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats whereWoodCnt($value)
 * @mixin \Eloquent
 */
class UserStats extends Model
{

    protected $fillable = [
        'guild_member_id', 'clan_position','bricks_cnt', 'wood_cnt', 'ark_f', 'ark_m', 'arena_won', 'arena_lost', 'savings', 'level'
    ];

    public function guildMember()
    {
        return $this->belongsTo('App\GuildMember');
    }
}