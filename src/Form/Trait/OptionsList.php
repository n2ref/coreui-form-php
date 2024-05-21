<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait OptionsList {

    protected ?array $options_list = null;


    /**
     * Установка списка значений
     * @param array|null $options
     * @return self
     */
    public function setOptions(array $options = null): self {

        if ($options === null) {
            $this->options_list = null;

        } else {
            $datalist_items = [];

            foreach ($options as $key => $option) {
                if (is_string($option) || is_numeric($option)) {
                    $datalist_items[] = [
                        'value' => $key,
                        'text'  => $option,
                    ];

                } elseif (is_array($option) &&
                          isset($option['value']) &&
                          (is_string($option['value']) || is_numeric($option['value']))
                ) {
                    $datalist_items[] = $option;
                }
            }

            $this->options_list = $datalist_items;
        }
        return $this;
    }


    /**
     * Получение списка значений
     * @return array|null
     */
    public function getOptions():? array {
        return $this->options_list;
    }
}