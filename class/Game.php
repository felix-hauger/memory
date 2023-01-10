<?php

class Game
{
    /**
     * @var integer determine the number of pairs
     */
    private $pairs_nb = 6;
    
    /**
     * @var boolean determine if a game is ongoing
     */
    private $status;
    
    /**
     * @var array contain cards
     */
    private Array $cards;
}