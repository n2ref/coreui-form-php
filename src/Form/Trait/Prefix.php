<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Prefix {

    protected ?string $prefix = null;


    /**
     * Установка приставки
     * @param string|null $prefix
     * @return self
     */
    public function setPrefix(string $prefix = null): self {
        $this->suffix = $prefix;
        return $this;
    }


    /**
     * Получение приставки
     * @return string|null
     */
    public function getPrefix():? string {
        return $this->prefix;
    }
}