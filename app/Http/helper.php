<?php

if(!function_exists('filter')){
      function filter($name){
        $category_by_groub =App\Group::with('categories')
        ->with('brands')
        ->where('group_name',$name)->get();
        return  $category_by_groub;
    }
}