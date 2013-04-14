<?php

namespace sf2ny\Blog;

class Blog
{
    private $title;
    private $lastUpdated;
    private $body;

    public function __construct($title, $lastUpdated, $body)
    {
        $this->title = $title;
        $this->body = $body;

        return $this;
    }

    public function title()
    {
        return $this->title;
    }

    public function body()
    {
        return $this->body;
    }
}