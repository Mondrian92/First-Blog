<?php

    class Post
    {
        private $title;
        private $content;
        private $tags;

        public function __construct(string $title, string $content, array $tags = [])
        {
            $this->title=$title;
            $this->content=$content;
            $this->tags=$tags;
        }

        public function getTitle(): string 
        {
            return $this->title;
        }

        public function getContent(): string 
        {
            return $this->content;
        }

        public function getTags(): array
        {
            return $this->tags;
        }

        public function setTitle(string $title)
        {
            $this->title=$title;
        }

        public function setContent(string $content) 
        {
            $this->content=$content;
        }

        public function setTags(array $tags)
        {
            $this->tags=$tags;
        }


    }