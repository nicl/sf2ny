<?php

namespace sf2ny\Blog;

class Blog
{
    protected $title;
    protected $lastUpdated;
    protected $body;

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