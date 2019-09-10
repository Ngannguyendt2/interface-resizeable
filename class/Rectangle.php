<?php


class Rectangle implements Resizeable
{
    protected $width;
    protected $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getArea()
    {

        return ($this->getWidth() * $this->getHeight());
    }

    public function resize($percent)
    {
        // TODO: Implement resize() method.
        $area = $this->getArea() + ($this->getArea() * $percent) / 100;
        return $area;
    }
}