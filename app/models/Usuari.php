<?php

use SleepingOwl\Models\SleepingOwlModel;

class Usuari extends SleepingOwlModel {

    protected $table = "usuaris";
    protected $fillable = [ 'nom', 'cognom', 'email', 'contrasenya', 'nick'];
    protected $hidden = ['created_at', 'updated_at'];

    public function scopeDefaultSort($query) {
        return $query->orderBy('id', 'desc');
    }

    public function getFullNameAttribute() {
        return implode(' ', [$this->nom, ' ', $this->cognom]);
    }

    public static function getList() {
        return static::lists('Nom', 'id');
    }

      public function post() {
        return $this->hasMany('Post');
    }
}
