<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Readonly {

    protected ?bool $readonly = null;


    /**
     * Установка состояния только для чтения
     * @param bool|null $readonly
     * @return self
     */
    public function setReadonly(bool $readonly = null): self {
        $this->readonly = $readonly;
        return $this;
    }


    /**
     * Получение состояния только для чтения
     * @return string|null
     */
    public function getReadonly():? bool {
        return $this->readonly;
    }
}