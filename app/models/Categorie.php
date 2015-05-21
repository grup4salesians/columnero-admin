<?php

use SleepingOwl\Models\SleepingOwlModel;

class Categorie extends SleepingOwlModel {

    protected $table = "categories";
    protected $fillable = [ 'nom'];
    protected $hidden = ['created_at', 'updated_at'];

    public function scopeDefaultSort($query) {
        return $query->orderBy('id', 'desc');
    }

    public static function getList() {
        return static::lists('Nom', 'id');
    }
    

}
