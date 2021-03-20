<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelItem extends Model
{
    protected $table = 'item';
    protected $fillable = ['nome','id_categoria','id_user','tipo'];

    public function relCategoria(){
        return $this->hasOne('App\Models\ModelCategoria', 'id', 'id_categoria');
    }
}
