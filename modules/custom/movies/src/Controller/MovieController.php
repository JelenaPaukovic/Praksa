<?php

namespace Drupal\movies\Controller;

class MovieController{

    public function page(){

        $items = array(
            array('name' => 'Movie one'),
        );

        return array(
            '#theme' => 'movie_list',
            '#items' => $items,
            '#title' => 'Movie list'
        );
    }

}