<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserStats
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserStats query()
 * @mixin \Eloquent
 */
class UserStats extends Model
{

    protected $fillable = [
        'guild_member_id', 'bricks_cnt', 'wood_cnt', 'ark_f', 'ark_m', 'arena_won', 'arena_lost', 'savings',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
