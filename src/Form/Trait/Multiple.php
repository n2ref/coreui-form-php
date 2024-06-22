<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Multiple {

    protected ?bool $multiple = null;


    /**
     * Установка признака, что поле может принимать несколько значений
     * @param bool|null $multiple
     * @return self
     */
    public function setMultiple(bool $multiple = null): self {
        $this->multiple = $multiple;
        return $this;
    }


    /**
     * Получение признака, что поле может принимать несколько значений
     * @return bool|null
     */
    public function getMultiple():? bool {
        return $this->multiple;
    }
}