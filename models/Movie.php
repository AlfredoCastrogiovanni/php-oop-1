<?php
    /**
     * A class that represent a movie.
     */
    class Movie {
        public $title;
        public $original_title;
        public $original_language;
        public $imgUrl;
        public $average_vote;
        public $release_date;
        public $categories;

        /**
         * Construct function that generate a movie.
         * 
         * @param String $title The italian title of the movie.
         * @param String $original_title The original title of the movie.
         * @param String $original_language The original language of the movie.
         * @param String $imgUrl The image Url of the movie.
         * @param Float $average_vote The average vote of the movie.
         * @param String $release_date The release date of the movie.
         * @param Category ...$categories The array of categories of the movie.
         */
        public function __construct(String $title, String $original_title, String $original_language, String $imgUrl, Float $average_vote, String $release_date, ...$categories) {
            $this->title = $title;
            $this->original_title = $original_title;
            $this->original_language = $original_language;
            $this->imgUrl = $imgUrl;
            $this->average_vote = $average_vote;
            $this->release_date = $release_date;

            foreach($categories as $category) {
                $this->categories[] = $category;
            }
        }

        /**
         * Print the rounded average vote.
         */
        public function roundedVote() {
            echo ceil($this->average_vote);
        }
    }