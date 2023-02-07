<?php

declare(strict_types=1);
 

class Article
{

    public string $title;
    public ?string $description;
    public ?string $publishDate;

    public function __construct(string $title, ?string $description, ?string $publishDate)
    {
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
    }

    public function formatPublishDate()
    {
        $formatted = date('d/M/Y', strtotime($this->publishDate));
        return $formatted;
    }
}