<?php

class Card
{
    /**
     * @var integer used to determine cards order
     */
    private $index;
    /**
     * @var string used to determine card image / pair
     */
    private $name;
    /**
     * @var string use to determine card status
     * values: verso, recto or paired
     */
    private $status = 'verso';
}