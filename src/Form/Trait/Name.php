<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Name {

    protected ?string $name = null;


    /**
     * Установка поля
     * @param string|null $name
     * @return self
     */
    public function setName(string $name = null): self {
        $this->name = $name;
        return $this;
    }


    /**
     * Получение поля
     * @return string|null
     */
    public function getName():? string {
        return $this->name;
    }
}