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

    /**
     * getCountTags
     *
     * @return int
     */
    public function getCountTags(): int
    {
        $html = file_get_contents($this->getUrl());
        $purified = htmlspecialchars($html);
        return preg_match_all('/<[a-z]*>/', $purified, $matched);
    }
    /**
     * getAllTags
     *
     * @return array
     */
    public function getAllTags(): array
    {
        return array();
    }
    /**
     * getParagraph
     *
     * @return array
     */
    public function getParagraph(): array
    {
        return array();
    }
}
