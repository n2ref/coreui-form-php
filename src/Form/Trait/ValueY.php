<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait ValueY {

    protected ?string $value_y = null;


    /**
     * Установка активного значения
     * @param string $value_y
     * @return self
     */
    public function setValueY(string $value_y): self {
        $this->value_y = $value_y;
        return $this;
    }


    /**
     * Получение активного значения
     * @return string
     */
    public function getValueY(): string {
        return $this->value_y;
    }
}