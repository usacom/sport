<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestGPS extends Model
{
    protected $table = 'testGPS';

    protected $hidden = [
        'point',
    ];

    protected $geometry = ['point'];

    protected $geometryAsText = false;

    public function newQuery($excludeDeleted = true)
    {
        if (!empty($this->geometry))
        {
            $raw = '';
            foreach ($this->geometry as $key=>$column)
            {
                if ($key != 0) $raw.= ', ';
                $raw .= "X($this->table.$column) as $column"."_longitude, ";
                $raw .= "Y($this->table.$column) as $column"."_latitude";
            }
            return parent::newQuery($excludeDeleted)->addSelect('*', \DB::raw($raw));
        }
        return parent::newQuery($excludeDeleted);
    }


//    protected $longitude = [];
//
//    protected $latitude = [];

//    public function longitude()
//    {
//        return \DB::raw("X($this->point)");
//    }
//
//    public function latitude()
//    {
//        $this->attributes['latitude'] = \DB::raw("Y($this->point)");
//    }
}
