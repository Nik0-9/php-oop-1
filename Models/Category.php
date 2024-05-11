<?php

class Category{
    public string $cate_name;

    function __construct($cate_name){
        $this->cate_name = $cate_name;
    }

    public static function fetchCategories(){
        //leggo il json
        $data = file_get_contents(__DIR__ ."/categories_db.json");
        //converto il json in array php
        $dataPhp = json_decode($data, true);
        //creo un nuovo array vuoto
        $categories = [];
        //riempio l'array con tutte le categorie come oggetti
        foreach($dataPhp as $key => $value){
        $categories[] = new Category($value);
        }
        return $categories;
    }
}