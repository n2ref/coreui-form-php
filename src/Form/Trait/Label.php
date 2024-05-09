<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Label {

    protected ?string $label = null;


    /**
     * Установка названия
     * @param string|null $label
     * @return self
     */
    public function setLabel(string $label = null): self {
        $this->label = $label;
        return $this;
    }


    /**
     * Получение названия
     * @return string|null
     */
    public function getLabel():? string {
        return $this->label;
    }
}