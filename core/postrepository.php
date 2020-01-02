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
            $decodedContent = json_decode(file_get_contents('archive.json'), true);
            
            return $decodedContent;
        }

        //public function remove($title)
//        {
  //          $posts = $this->getAll();
    //        foreach ($posts as $index => $post) {
      //          if ($post->title === $title) {
        //            unset($posts[$index]);
          //      }
            //}

           // $this->store($posts);
        //}

        private function store($posts)
        {
            $postString = json_encode($posts, JSON_PRETTY_PRINT);

            file_put_contents('archive.json', $postString);
        }
    }