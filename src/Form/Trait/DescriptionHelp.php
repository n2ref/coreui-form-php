<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait DescriptionHelp {

    protected ?string $description_help = null;


    /**
     * Установка всплывающего описания
     * @param string|null $description
     * @return self
     */
    public function setDescriptionHelp(string $description = null): self {
        $this->description_help = $description;
        return $this;
    }


    /**
     * Получение всплывающего описания
     * @return string|null
     */
    public function getDescriptionHelp():? string {
        return $this->description_help;
    }
}