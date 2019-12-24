<?php 

class Car { 

    public string $name ;
    public string $color;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
    /**
     * Car constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


}