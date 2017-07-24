<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Files
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $owner
 * @property string $address
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Files whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Files whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Files whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Files whereOwner($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Files whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Files whereUpdatedAt($value)
 */
class Files extends Model
{
    protected $table = 'userFiles';

}
