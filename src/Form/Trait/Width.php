<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Width {

    protected string|int|float|null $width = null;


    /**
     * Установка ширины поля
     * @param string|int|float|null $width
     * @return self
     */
    public function setWidth(string|int|float $width = null): self {
        $this->width = $width;
        return $this;
    }


    /**
     * Получение ширины поля
     * @return string|int|float|null
     */
    public function getWidth(): string|int|float|null {
        return $this->width;
    }
}