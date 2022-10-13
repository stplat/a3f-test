<?php

namespace App\Pages;

use App\Interfaces\HtmlTemplate;
use App\Parsers\HtmlParser;

class MainPage
{
    public HtmlTemplate $parser;

    public function __construct()
    {
        $this->parser = new HtmlParser();
    }

    /**
     * getHtml
     *
     * @return string
     */
    public function getDOMList(): array
    {
        return [
            'paragraphs' => $this->parser->getParagraph(),
            'tags' => $this->parser->getAllTags(),
            'count' => $this->parser->getCountTags()
        ];
    }
}
