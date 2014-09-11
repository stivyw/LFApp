<?php
Route::get('/', function()
{
	foreach(Artigo::get() as $item){
		echo $item->categoria->titulo . '<br/>';
	}
	foreach(Categoria::find(1)->artigos as $art)
		echo $art->titulo . '<br>';
});
Route::get('/artigos/', function()
{
    $artigos = Artigo::get();
    return View::make('artigos', compact('artigos'));
});
// Criar um novo artigo
Route::get('/artigos/inserir', function()
{
    return View::make('artigos_inserir');
});
Route::post('/artigos/inserir', function()
{
    $artigo = new Artigo();
 
    $artigo->titulo   = Input::get('titulo');
    $artigo->conteudo = Input::get('conteudo');
 
    $artigo->save();
 
    return Redirect::to('/artigos/');
});
