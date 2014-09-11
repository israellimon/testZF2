<?php
namespace Album\Model;

 class Album
 {
     public $id;
     public $autor;
     public $titulo;

     public function exchangeArray($data)
     {
         $this->id     = (!empty($data['id'])) ? $data['id'] : null;
         $this->autor = (!empty($data['autor'])) ? $data['autor'] : null;
         $this->titulo  = (!empty($data['titulo'])) ? $data['titulo'] : null;
     }
 }