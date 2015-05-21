<?php

Admin::model('\Usuari')->title('Usuaris')->columns(function (){
	Column::string('nom', 'Nom');
        Column::string('cognom', 'cognom');
        Column::string('email', 'email');
       /* Column::string('contrasenya', 'contrasenya');*/
        Column::string('nick', 'nick');
        Column::count('post', 'Numero Post')->append(Column::filter('usuari_id')->model('\Post'));
})->form(function (){
	FormItem::text('nom', 'Nom');
        FormItem::text('cognom', 'cognom');
        FormItem::text('email', 'email');
        FormItem::text('contrasenya', 'contrasenya');
        FormItem::text('nick', 'nick');
        
 });
