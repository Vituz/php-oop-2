<?php

include __DIR__ . '/traits/traits.php';
include __DIR__ . '/Game.php';


/**
 * NeoGeo Game Class
 * @author Vituz
 * @copyright 2021 Vituz
 */
class NeoGeo extends Game
{
    use Rate, Downloaded;

    protected $emulator = 'NeoGeo';


    /**
     * NeoGeo Game constructor
     * @param string $name - Add game name
     * @param string $genre - Add game genre
     * @param string $release - Add game release year
     * @param string $img - Add game image
     */
    public function __construct(string $name, string $genre, string $release, string $img)
    {
        parent::__construct($name, $genre, $release, $img);
    }
}
