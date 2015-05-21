<?php

use SleepingOwl\Models\SleepingOwlModel;

class Post extends SleepingOwlModel {

    protected $table = "posts";
    protected $fillable = [ 'titol', 'comentari', 'usuari_id', 'data', 'privat'];
    protected $hidden = ['created_at', 'updated_at'];

    public function scopeDefaultSort($query) {
        return $query->orderBy('id', 'desc');
    }

    public function usuari() {
        return $this->belongsTo('Usuari', 'usuari_id');
    }

    public function postcategories() {
        return $this->hasMany('PostCategorie');
    }

}
