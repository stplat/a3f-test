<?php

namespace App\Interfaces;

interface HtmlTemplate
{

    /**
     * getUrl
     *
     * @return string
     */
    public function getUrl(): string;
    /**
     * getCountTags
     *
     * @return int
     */
    public function getCountTags(): int;
    /**
     * getAllTags
     *
     * @return array
     */
    public function getAllTags(): array;
    /**
     * getParagraph
     *
     * @return array
     */
    public function getParagraph(): array;
}
