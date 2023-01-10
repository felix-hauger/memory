<?php

class Game
{
    /**
     * @var integer determine the number of pairs
     */
    private $_pairs_nb = 6;

    /**
     * @var boolean determine if a game is ongoing
     */
    private $_status;

    /**
     * @var array contain cards
     */
    private array $_cards;


    public function getPairsNb()
    {
        return $this->_pairs_nb;
    }

    public function setPairsNb($pairs_nb)
    {
        $this->_pairs_nb = $pairs_nb;
    }

    public function getStatus()
    {
        return $this->_status;
    }

    public function setStatus($status)
    {
        $this->_status = $status;
    }

    public function getCards()
    {
        return $this->_cards;
    }

    public function setCards($cards)
    {
        $this->_cards = $cards;
    }
}
