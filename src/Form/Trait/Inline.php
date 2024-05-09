<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Inline {

    protected ?bool $inline = null;


    /**
     * Установка отображения списка в строку или в колонку
     * @param bool|null $inline
     * @return $this
     */
    public function setInline(bool $inline = null): self {
        $this->inline = $inline;
        return $this;
    }


    /**
     * Получение отображения списка в строку или в колонку
     * @return bool|null
     */
    public function getInline():? bool {
        return $this->inline;
    }
}