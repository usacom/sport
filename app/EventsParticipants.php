<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\EventsParticipants
 *
 * @property int $id
 * @property int $id_event
 * @property int $id_user
 * @property bool $status
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\EventsParticipants whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EventsParticipants whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EventsParticipants whereIdEvent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EventsParticipants whereIdUser($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EventsParticipants whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EventsParticipants whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EventsParticipants whereValue($value)
 * @mixin \Eloquent
 * @property-read \App\Events $event
 * @property-read \App\User $user
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\EventsParticipants whereDeletedAt($value)
 */
class EventsParticipants extends Model
{
    use SoftDeletes;
    /*
     *
     * status =
     * 0 - invite
     * 1 - participant
     * 2 - came out
     * 3 - disqualified
     * 4 - lost
     * 5 - win
     */


    protected $table = 'eventsParticipants';

    protected $hidden = [
        'value'
    ];

    public function event()
    {
        return $this->belongsTo(Events::class, 'id_event', 'id')->with(['ownerProfile']);
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function status(){
        return $this->hasMany(StatusParticipant::class, 'id_participant', 'id');
    }

}
