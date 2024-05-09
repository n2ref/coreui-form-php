<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Show {

    protected ?bool $show = null;


    /**
     * Установка отображения поля
     * @param bool|null $show
     * @return self
     */
    public function setShow(bool $show = null): self {
        $this->show = $show;
        return $this;
    }


    /**
     * Получение отображения поля
     * @return bool|null
     */
    public function getShow():? bool {
        return $this->show;
    }
}