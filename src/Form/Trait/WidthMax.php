<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait WidthMax {

    protected string|int|float|null $width_max = null;


    /**
     * Установка максимальной ширины поля
     * @param string|int|float|null $width_max
     * @return self
     */
    public function setWidthMax(string|int|float $width_max = null): self {
        $this->width_max = $width_max;
        return $this;
    }


    /**
     * Получение максимальной ширины поля
     * @return string|int|float|null
     */
    public function getWidthMix(): string|int|float|null {
        return $this->width_max;
    }
}