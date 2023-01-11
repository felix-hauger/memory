<?php

class Game
{
    /**
     * @var integer determine the number of pairs
     */
    private $_pairs_nb;

    /**
     * @var boolean determine if a game is ongoing
     */
    private $_status;

    /**
     * @var array contain cards
     */
    private array $_cards;


    public function createBoard()
    {
        for ($i = 0; $i < $this->_pairs_nb * 2; $i++) {
            $card = new Card();
            $card->setId($i+1);
            $card->setName($i % $this->_pairs_nb + 1);
            // $card->setName(rand(1, $this->_pairs_nb));
            $this->_cards[] = $card;
        }
        shuffle($this->_cards);
    }

    /**
     * set session variables to instanciated Game, and id of cards to compare them when clicked
     * @return Game $this
     */
    public function start(): ?Game
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            $_SESSION['game'] = $this;
            $cards = [];
            foreach ($this->_cards as $card) {
                $cards[] = $card->getId();
            }
            $_SESSION['cards'] = $cards;
            return $this;
        }
    }

    public function toHtml()
    {
        $board = '';
        foreach ($this->_cards as $card) {
            $board .= $card->toHtml();
        }
        return $board;
    }

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
