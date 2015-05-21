<?php

Admin::model('\Categorie')->title('Categories')->columns(function (){
    Column::string('nom', 'Nom');
        
})->form(function (){
	FormItem::text('nom', 'nom');
});