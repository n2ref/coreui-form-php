<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait OptionsClass {

    protected ?string $options_class = null;


    /**
     * Установка класса для опций
     * @param string|null $options_class
     * @return self
     */
    public function setOptionsClass(string $options_class = null): self {

        if ($options_class === null) {
            $this->options_class = null;

        } else {
            $this->options_class = $options_class;
        }
        return $this;
    }


    /**
     * Получение класса для опций
     * @return string|null
     */
    public function getOptionsClass():? string {
        return $this->options_class;
    }
}