<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Height {

    protected string|int|float|null $height = null;


    /**
     * Установка высоты поля
     * @param string|int|float|null $height
     * @return self
     */
    public function setHeight(string|int|float $height = null): self {
        $this->height = $height;
        return $this;
    }


    /**
     * Получение высоты поля
     * @return string|int|float|null
     */
    public function getHeight(): string|int|float|null {
        return $this->height;
    }
}