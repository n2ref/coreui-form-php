<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait InvalidText {

    protected ?string $invalid_text = null;


    /**
     * Установка текста с ошибкой
     * @param string|null $invalid_text
     * @return self
     */
    public function setInvalidText(string $invalid_text = null): self {
        $this->invalid_text = $invalid_text;
        return $this;
    }


    /**
     * Получение текста с ошибкой
     * @return string|null
     */
    public function getInvalidText():? string {
        return $this->invalid_text;
    }
}