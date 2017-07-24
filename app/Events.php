<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Events
 *
 * @property int $id
 * @property string $name
 * @property int $type_owner
 * @property int $owner
 * @property string $type
 * @property bool $target
 * @property string $data_start
 * @property string $data_end
 * @property string $description
 * @property bool $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Events whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Events whereDataEnd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Events whereDataStart($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Events whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Events whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Events whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Events whereOwner($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Events whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Events whereTarget($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Events whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Events whereTypeOwner($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Events whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\EventsParticipants[] $eventsParticipants
 * @property string $target_description
 * @method static \Illuminate\Database\Query\Builder|\App\Events whereTargetDescription($value)
 * @property string $deleted_at
 * @property-read \App\User $ownerProfile
 * @method static \Illuminate\Database\Query\Builder|\App\Events whereDeletedAt($value)
 */
class Events extends Model
{
    use SoftDeletes;

    protected $table = 'events';

    public function eventsParticipants()
    {
        return $this->hasMany(EventsParticipants::class, 'id_event', 'id');
    }
    public function ownerProfile(){
        return $this->belongsTo(User::class, 'owner', 'id');
    }
}
