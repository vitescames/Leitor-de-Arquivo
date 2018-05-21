<?php

    class Leitor{

        private $content;

        public function loadContent($value){            
            $this->content = fopen($value, "r");
        }

        public function displayContent($file_name){
            return fread($this->content, filesize($file_name));
        }

    }

?>