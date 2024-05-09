<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait HeightMin {

    protected string|int|float|null $height_min = null;


    /**
     * Установка минимальной высоты поля
     * @param string|int|float|null $height_min
     * @return self
     */
    public function setHeightMin(string|int|float $height_min = null): self {
        $this->height_min = $height_min;
        return $this;
    }


    /**
     * Получение минимальной высоты поля
     * @return string|int|float|null
     */
    public function getHeightMin(): string|int|float|null {
        return $this->height_min;
    }
}