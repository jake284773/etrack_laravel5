<?php

namespace App;

use App\Scopes\NumberScope;
use Illuminate\Database\Eloquent\Model;

class SubjectSector extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new NumberScope());
    }

}
