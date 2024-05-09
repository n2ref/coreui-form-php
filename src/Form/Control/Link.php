<?php
namespace CoreUI\Form\Control;


/**
 *
 */
class Link extends Button {

    protected ?string $url = null;


    /**
     * @param string      $content
     * @param string|null $url
     */
    public function __construct(string $content, string $url = null) {

        parent::__construct($content);
        $this->setUrl($url);
    }


    /**
     * Установка ссылки
     * @param string|null $url
     * @return self
     */
    public function setUrl(string $url = null): self {
        $this->url = $url;
        return $this;
    }


    /**
     * Получение поля
     * @return string|null
     */
    public function getUrl():? string {
        return $this->url;
    }


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = parent::toArray();
        $result['type'] = 'link';

        if ( ! is_null($this->url)) {
            $result['url'] = $this->url;
        }

        return $result;
    }
}