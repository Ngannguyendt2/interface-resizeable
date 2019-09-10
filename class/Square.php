<?php


class Square implements Resizeable
{
    protected $edge;

    public function __construct($edge)
    {
        $this->edge = $edge;
    }

    /**
     * @return mixed
     */
    public function getEdge()
    {
        return $this->edge;
    }

    /**
     * @param mixed $edge
     */
    public function setEdge($edge)
    {
        $this->edge = $edge;
    }

    public function getArea()
    {
        return $this->getEdge() * $this->getEdge();
    }

    public function resize($percent)
    {
        // TODO: Implement resize() method.
        $area = $this->getArea() + ($this->getArea() * $percent) / 100;
        return $area;
    }

}