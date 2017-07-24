<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\DialogMessages
 *
 * @property int $id
 * @property int $idDialog
 * @property int $idUser
 * @property string $text
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\DialogMessages whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DialogMessages whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DialogMessages whereIdDialog($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DialogMessages whereIdUser($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DialogMessages whereText($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DialogMessages whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DialogMessages extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dialogMessages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idDialog', 'idUser', 'text',
    ];
}
