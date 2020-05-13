<?php

class Post
{
    public $title;

    public $author;

    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
    new Post('My First Post', 'MI', true),
    new Post('My Second Post', 'IM', false),
    new Post('My Third Post', 'SA', false),
    new Post('My Fourth Post', 'AM', true)
];

// $unpublishedPosts = array_filter($posts, function ($post) {
//     return ! $post->published;
// });

// $publishedPosts = array_filter($posts, function ($post) {
//     return $post->published;
// });

// $modified = array_map(function ($post) {
//     return ['title' => $post->title];
// }, $posts);

$posts = array_map(function ($post) {
    return (array) $post;
}, $posts);

$authors = array_column($posts, 'author', 'title');

var_dump($authors);


