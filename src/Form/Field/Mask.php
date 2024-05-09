<?php
namespace CoreUI\Form\Field;


/**
 * @see https://igorescobar.github.io/jQuery-Mask-Plugin/docs.html
 */
class Mask extends Text {

    protected ?string $mask    = null;
    protected ?array  $options = null;


    /**
     * Установка маски поля
     * @param string|null $mask
     * @return self
     */
    public function setMask(string $mask = null): self {
        $this->mask = $mask;
        return $this;
    }


    /**
     * Получение маски поля
     * @return string|null
     */
    public function getMask():? string {
        return $this->mask;
    }


    /**
     * Установка опции placeholder
     * @param string|null $placeholder
     * @return self
     */
    public function setMaskPlaceholder(string $placeholder = null): self {

        if (is_null($this->options)) {
            $this->options = [];
        }

        $this->options['placeholder'] = $placeholder;
        return $this;
    }


    /**
     * Установка опции reverse
     * @param bool|null $reverse
     * @return self
     */
    public function setMaskReverse(bool $reverse = null): self {

        if (is_null($this->options)) {
            $this->options = [];
        }

        $this->options['reverse'] = $reverse;
        return $this;
    }


    /**
     * Установка опции translation
     * @param string $char
     * @param array  $options
     * @return self
     */
    public function setMaskTranslation(string $char, array $options): self {

        if (is_null($this->options)) {
            $this->options = [];
        }

        $this->options['translation'][$char] = $options;
        return $this;
    }


    /**
     * Установка опции clearIfNotMatch
     * @param bool|null $is_clear
     * @return self
     */
    public function setMaskClearIfNotMatch(bool $is_clear = null): self {

        if (is_null($this->options)) {
            $this->options = [];
        }

        $this->options['clearIfNotMatch'] = $is_clear;
        return $this;
    }


    /**
     * Установка опции selectOnFocus
     * @param bool|null $is_select
     * @return self
     */
    public function setMaskSelectOnFocus(bool $is_select = null): self {

        if (is_null($this->options)) {
            $this->options = [];
        }

        $this->options['selectOnFocus'] = $is_select;
        return $this;
    }


    /**
     * Установка настроек маски
     * @param array|null $options
     * @return self
     */
    public function setMaskOptions(array $options = null): self {

        $this->options = $options;
        return $this;
    }


    /**
     * Получение настроек маски
     * @return array|null
     */
    public function getMaskOptions():? array {
        return $this->options;
    }


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = parent::toArray();
        $result['type'] = 'mask';

        if ( ! is_null($this->mask)) {
            $result['mask'] = $this->mask;
        }

        if ( ! is_null($this->options)) {
            $result['options'] = $this->options;
        }

        return $result;
    }
}