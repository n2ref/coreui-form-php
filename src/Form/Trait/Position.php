<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Position {

    protected ?string $position = null;


    /**
     * Установка поля
     * @param string|null $position
     * @return self
     */
    public function setPosition(string $position = null): self {
        $this->position = $position;
        return $this;
    }


    /**
     * Получение поля
     * @return string|null
     */
    public function getPosition():? string {
        return $this->position;
    }
}