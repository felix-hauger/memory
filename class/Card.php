<?php

class Card
{
    /**
     * @var integer used to identify the card
     */
    private $_id;

    /**
     * @var string used to determine card image / pair
     */
    private $_name;

    /**
     * @var string use to determine card status
     * values: verso, recto or paired
     */
    private $_status;

    public function __construct()
    {
        $this->_status = 'recto';
    }


    public function flip()
    {
        if ($this->_status === 'verso') {
            $this->_status = 'recto';
        } elseif ($this->_status === 'recto') {
            $this->_status = 'verso';
        }
    }

    public function toHtml()
    {
        switch ($this->_status) {
            case 'verso':
                return '<div class="card" ><input type="image" src="media/img/verso.png" alt="verso"></div>';
                break;
            case 'recto':
                return '<div class="card" ><img src="media/img/' . $this->_name . '.png" alt="recto image' . $this->_name . '"></div>';
                return $this->_name . '<br />';
                break;
            case 'paired':
                return '<div class="card found"><img src="media/img/' . $this->_name . '.png" alt ="' . $this->_name . 'found"></div>';
                break;
        }
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getStatus()
    {
        return $this->_status;
    }

    public function setStatus($status)
    {
        $this->_status = $status;
    }
}
