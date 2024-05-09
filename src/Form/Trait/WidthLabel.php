<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait WidthLabel {

    protected string|int|float|null $width_label = null;


    /**
     * Установка ширины поля
     * @param string|int|float|null $width_label
     * @return self
     */
    public function setWidthLabel(string|int|float $width_label = null): self {
        $this->width_label = $width_label;
        return $this;
    }


    /**
     * Получение ширины поля
     * @return string|int|float|null
     */
    public function getWidthLabel(): string|int|float|null {
        return $this->width_label;
    }
}