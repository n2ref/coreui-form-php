<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait DescriptionLabel {

    protected ?string $description_label = null;


    /**
     * Установка описания для заголовка поля
     * @param string|null $description
     * @return self
     */
    public function setDescriptionLabel(string $description = null): self {
        $this->description_label = $description;
        return $this;
    }


    /**
     * Получение описания для заголовка поля
     * @return string|null
     */
    public function getDescriptionLabel():? string {
        return $this->description_label;
    }
}