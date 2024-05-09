<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait WidthMin {

    protected string|int|float|null $width_min = null;


    /**
     * Установка минимальной ширины поля
     * @param string|int|float|null $width_min
     * @return self
     */
    public function setWidthMin(string|int|float $width_min = null): self {
        $this->width_min = $width_min;
        return $this;
    }


    /**
     * Получение минимальной ширины поля
     * @return string|int|float|null
     */
    public function getWidthMin(): string|int|float|null {
        return $this->width_min;
    }
}