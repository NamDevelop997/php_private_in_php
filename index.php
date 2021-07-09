<?php
class Rectangle
{
    private $width;
    private $height;

    public function set_value($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function get_perimeter()
    {
        return 2 * ($this->width + $this->height);
    }

    public function get_area()
    {
        return $this->width * $this->height;
    }
}

$a = new Rectangle();

$a->set_value(2, 4);
echo $a->get_area();
echo $a->get_perimeter();
