<?php

Admin::model('\Post')->title('Posts')->filters(function (){
	ModelItem::filter('usuari_id')->title()->from('\Usuari','id');
})->columns(function (){
	Column::string('titol', 'Titol');
        Column::string('comentari', 'Comentari');
        Column::string('usuari.full_name', 'Usuari');
        Column::date('data', 'Data');
        Column::string('privat', 'Privat');
        Column::count('postcategories', 'Categories')->append(Column::filter('post_id')->model('\PostCategorie'));
})->form(function (){
	FormItem::text('titol', 'Titol');
        FormItem::ckeditor('comentari', 'Comentari');
        FormItem::select('usuari_id', 'Usuari')->list('\Usuari')->required();
        FormItem::timestamp('data', 'Data');
        FormItem::checkbox('privat', 'Privat');
        
     
 });

 
