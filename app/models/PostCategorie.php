<?php

use SleepingOwl\Models\SleepingOwlModel;

class PostCategorie extends SleepingOwlModel {

    protected $table = "postscategories";
    protected $fillable = [ 'post_id', 'categoria_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function scopeDefaultSort($query) {
        return $query->orderBy('id', 'desc');
    }

    public function post() {
        return $this->belongsTo('Post', 'post_id');
    }

    public function categories() {
        return $this->belongsTo('Categorie', 'categoria_id');
    }

}
