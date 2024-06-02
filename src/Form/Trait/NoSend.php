<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait NoSend {

    protected ?bool $no_send = null;


    /**
     * Установка признака, что поле не надо отправлять
     * @param bool|null $no_send
     * @return self
     */
    public function setNoSend(bool $no_send = null): self {
        $this->no_send = $no_send;
        return $this;
    }


    /**
     * Получение признака, что поле не надо отправлять
     * @return bool|null
     */
    public function getNoSend():? bool {
        return $this->no_send;
    }
}