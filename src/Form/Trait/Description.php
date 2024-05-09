<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Description {

    protected ?string $description = null;


    /**
     * Установка описания
     * @param string|null $description
     * @return self
     */
    public function setDescription(string $description = null): self {
        $this->description = $description;
        return $this;
    }


    /**
     * Получение описания
     * @return string|null
     */
    public function getDescription():? string {
        return $this->description;
    }
}