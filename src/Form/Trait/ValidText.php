<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait ValidText {

    protected ?string $valid_text = null;


    /**
     * Установка текста с описанием правильности
     * @param string|null $valid_text
     * @return self
     */
    public function setValidText(string $valid_text = null): self {
        $this->valid_text = $valid_text;
        return $this;
    }


    /**
     * Получение текста с описанием правильности
     * @return string|null
     */
    public function getValidText():? string {
        return $this->valid_text;
    }
}