<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\foto;
class Shpalljet extends Model
{
    //
    protected  $guarded =[];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fotos()
    {
        return $this->hasMany(foto::class);
    }
}
