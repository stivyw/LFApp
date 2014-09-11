<?php
class Artigo extends Eloquent{
	public function categoria(){
		return $this->belongsTo('Categoria');
	}
}
