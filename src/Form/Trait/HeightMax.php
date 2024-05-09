<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait HeightMax {

    protected string|int|float|null $height_max = null;


    /**
     * Установка максимальной высоты поля
     * @param string|int|float|null $height_max
     * @return self
     */
    public function setHeightMax(string|int|float $height_max = null): self {
        $this->height_max = $height_max;
        return $this;
    }


    /**
     * Получение максимальной высоты поля
     * @return string|int|float|null
     */
    public function getHeightMax(): string|int|float|null {
        return $this->height_max;
    }
}