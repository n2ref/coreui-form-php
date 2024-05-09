<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait ValueN {

    protected ?string $value_n = null;


    /**
     * Установка выключенного значения
     * @param string $value_n
     * @return self
     */
    public function setValueN(string $value_n): self {
        $this->value_n = $value_n;
        return $this;
    }


    /**
     * Получение выключенного значения
     * @return string
     */
    public function getValueN(): string {
        return $this->value_n;
    }
}