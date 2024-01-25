<?php

    /**
     * A class that represent a category of a movie.
     */
    class Category {
        public $name;

        /**
         * Construct function that generate a category of a movie.
         * 
         * @param String $name The name of a category.
         */
        public function __construct(String $name) {
            $this->name = $name;
        }
    }