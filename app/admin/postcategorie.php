<?php

Admin::model('\PostCategorie')->title('Post Categories')->filters(function (){
	ModelItem::filter('post_id')->title()->from('\Post','id');
})->columns(function () {
    Column::string('post.titol', 'Nom Usuari');
    Column::string('categories.nom', 'Categories');
})->form(function () {
    
});
