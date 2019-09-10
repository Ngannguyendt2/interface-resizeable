<?php


class Circle implements Resizeable
{
    protected $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return (pi() * pow($this->radius, 2));
    }

    function getPerimeter()
    {
        return pi() * $this->radius * 2;
    }

    public function resize($percent)
    {
        // TODO: Implement resize() method.
        $area = $this->getArea() + ($this->getArea() * $percent) / 100;
        return $area;
    }
}