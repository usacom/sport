<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Integer;

/**
 * App\StatusParticipant
 *
 * @property int $id
 * @property int $id_participant
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\StatusParticipant whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StatusParticipant whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StatusParticipant whereIdParticipant($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StatusParticipant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StatusParticipant whereValue($value)
 * @mixin \Eloquent
 */
class StatusParticipant extends Model
{
    protected $table = 'statusesParticipants';



}
