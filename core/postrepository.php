<?php

    class PostRepository
    {
        public function save(Post $post)
        {
            $posts = $this->getAll();

            $posts[] =[
                "title"=>$post->getTitle(),
                "content"=>$post->getContent(),
                "tag"=>$post->getTags()
            ];

            $this->store($posts);
        }

        public function getAll()
        {   
            $address= __DIR__.DIRECTORY_SEPARATOR.'archive.json';
            $decodedContent = json_decode(file_get_contents($address), true);
            
            return $decodedContent;
        }

        public function remove($title)
        {
            $posts = $this->getAll();
            foreach ($posts as $index => $post) 
            {
                if ($post->title === $title) {
                    unset($posts[$index]);
                }
            }

            $this->store($posts);
        }

        private function store($posts)
        {
            $address= __DIR__.DIRECTORY_SEPARATOR.'archive.json';
            $postString = json_encode($posts, JSON_PRETTY_PRINT);

            file_put_contents($address, $postString);
        }
    }