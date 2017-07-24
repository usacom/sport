<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\DialogUsers
 *
 * @property int $id
 * @property int $idUser
 * @property int $idDialog
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\DialogList $dialog
 * @method static \Illuminate\Database\Query\Builder|\App\DialogUsers whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DialogUsers whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DialogUsers whereIdDialog($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DialogUsers whereIdUser($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DialogUsers whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DialogUsers whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DialogUsers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dialogUsers';

    public function dialog()
    {
        return $this->belongsTo(DialogList::class, 'id', 'idDialog');
    }



}
