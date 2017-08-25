<?php

    class webpage{
        
        public $title;
        public $css;
        public $header;
        public $body;
        public $footer;

        
    public function displayPage() {
        $page ='
        <html>

        <head>
            <title>'.$this->title.'</title>
            <link rel="stylesheet" type="text/css" href="'.$this->css.'">
        </head>
           
        <body>
            '.$this->body.'
            
        </body>
        <footer>
             '.$this->footer.'
        
        </footer>
        </html>
';
        echo $page;
    }



    }


?>