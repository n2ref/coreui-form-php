<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Required {

    protected ?bool $required = null;


    /**
     * Установка обязательности поля
     * @param bool|null $required
     * @return self
     */
    public function setRequired(bool $required = null): self {
        $this->required = $required;
        return $this;
    }


    /**
     * Получение обязательности поля
     * @return string|null
     */
    public function getRequired():? bool {
        return $this->required;
    }
}