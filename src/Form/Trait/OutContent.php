<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait OutContent {

    protected ?string $out_content = null;


    /**
     * Установка внешнего текста
     * @param string|null $out_content
     * @return self
     */
    public function setOutContent(string $out_content = null): self {
        $this->out_content = $out_content;
        return $this;
    }


    /**
     * Получение внешнего текста
     * @return string|null
     */
    public function getOutContent():? string {
        return $this->out_content;
    }
}