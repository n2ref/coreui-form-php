<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Help {

    protected ?string $help = null;


    /**
     * Установка всплывающего описания
     * @param string|null $help
     * @return self
     */
    public function setHelp(string $help = null): self {
        $this->help = $help;
        return $this;
    }


    /**
     * Получение всплывающего описания
     * @return string|null
     */
    public function getHelp():? string {
        return $this->help;
    }
}