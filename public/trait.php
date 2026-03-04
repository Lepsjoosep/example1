<?php

trait Timestampable
{
    public $createdAt;
    public $updatedAt;

    public function touch()
    {
        $this->updatedAt = date("Y-m-d H:i:s");
    }
}

trait Sortable
{
    public function sortBy($array, $key)
    {
        usort($array, function($a, $b) use ($key) {
            return $a[$key] <=> $b[$key];
        });
        return $array;
    }
}

class Post
{
    use Timestampable, Sortable;

    public $title;

    public function __construct($title)
    {
        $this->title     = $title;
        $this->createdAt = date("Y-m-d H:i:s");
        $this->updatedAt = date("Y-m-d H:i:s");
    }
}

// --- Usage ---
$post = new Post("My First Post");
$post->touch();
echo $post->updatedAt; // Current timestamp

echo "\n";

$posts = [
    ['title' => 'Post C', 'views' => 100],
    ['title' => 'Post A', 'views' => 500],
    ['title' => 'Post B', 'views' => 250]
];

$sorted = $post->sortBy($posts, 'views');
print_r($sorted); // Sorted by views