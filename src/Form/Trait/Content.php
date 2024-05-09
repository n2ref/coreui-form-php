<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Content {

    protected ?string $content = null;


    /**
     * Установка содержимого
     * @param string|null $content
     * @return self
     */
    public function setContent(string $content = null): self {
        $this->content = $content;
        return $this;
    }


    /**
     * Получение содержимого
     * @return string|null
     */
    public function getContent():? string {
        return $this->content;
    }
}