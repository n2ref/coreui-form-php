<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait OnClick {

    protected ?string $onclick = null;


    /**
     * Установка события нажатия
     * @param string|null $onclick
     * @return self
     */
    public function setOnClick(string $onclick = null): self {
        $this->onclick = $onclick;
        return $this;
    }


    /**
     * Получение события нажатия
     * @return string|null
     */
    public function getOnClick():? string {
        return $this->onclick;
    }
}