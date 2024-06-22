<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Suffix {

    protected ?string $suffix = null;


    /**
     * Установка окончания
     * @param string|null $suffix
     * @return self
     */
    public function setSuffix(string $suffix = null): self {
        $this->suffix = $suffix;
        return $this;
    }


    /**
     * Получение окончания
     * @return string|null
     */
    public function getSuffix():? string {
        return $this->suffix;
    }
}