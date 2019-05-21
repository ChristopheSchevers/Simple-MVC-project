<?php

class HTMLTemplate
{
    protected $charset = 'UTF-8';
    protected $language = 'en-US';

    private $pageTitle = 'Example.com';

    public function __construct($title = null)
    {
        if($title != null){
            $this->pageTitle = $title;
        }

        echo '<!DOCTYPE html>'."\n",
        '<html lang="'.$this->language.'">'."\n",
        '<head>'."\n",
            '<meta charset="'.$this->charset.'">'."\n",
            '<meta name="viewport" content="width=device-width, initial-scale=1.0">'."\n",
            '<meta http-equiv="X-UA-Compatible" content="ie=edge">'."\n",
            '<title>'.$this->pageTitle.'</title>'."\n",
        '</head>'."\n",
        '<body>'."\n";
    }

    public function __destruct()
    {
        echo "\n".'</body>'."\n",
        '</html>';
    }
}