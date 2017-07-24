<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\DialogList
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property int $owner
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\DialogMessages[] $messages
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\DialogUsers[] $users
 * @method static \Illuminate\Database\Query\Builder|\App\DialogList whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DialogList whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DialogList whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DialogList whereOwner($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DialogList whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DialogList whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DialogList extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dialogList';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'name',
        'owner',
    ];

    public function users()
    {
        return $this->hasMany(DialogUsers::class, 'idDialog');
    }

    public function messages(){
        return $this->hasMany(DialogMessages::class, 'idDialog');
    }



}
