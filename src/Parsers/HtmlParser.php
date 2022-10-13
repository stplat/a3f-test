<?php

namespace App\Parsers;

use App\Interfaces\HtmlTemplate;

class HtmlParser implements HtmlTemplate
{
    /**
     * @return string
     */
    public function getUrl(): string
    {
        return 'http://www.example.com/';
    }

    public function __construct()
    {
        $html = file_get_contents($this->getUrl());
        $this->dom = $html;
    }

    /**
     * getCountTags
     *
     * @return int
     */
    public function getCountTags(): int
    {
        return preg_match_all('/<[a-z]*>/', $this->dom, $matched);
    }
    /**
     * getAllTags
     *
     * @return array
     */
    public function getAllTags(): array
    {
        preg_match_all('/<[a-z]*>/', $this->dom, $matched);
        return $matched;
    }
    /**
     * getParagraph
     *
     * @return array
     */
    public function getParagraph(): array
    {
        preg_match_all('/<p>/', $this->dom, $matched);
        return $matched;
    }
}
