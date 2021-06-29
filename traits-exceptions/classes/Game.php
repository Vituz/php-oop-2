<?php

class Game
{
    protected $name;
    protected $genre;
    protected $release;
    protected $img;

    /**
     * Game constructor
     * @param string $name - Add game name
     * @param string $genre - Add game genre
     * @param string $release - Add game release year
     * @param string $img - Add game image
     */
    public function __construct(string  $name, string $genre, string $release, string $img)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->release = $release;
        $this->img = $img;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getGenre()
    {
        return $this->genre;
    }
    public function getRelease()
    {
        return $this->release;
    }
    public function getImg()
    {
        return $this->img;
    }
}
