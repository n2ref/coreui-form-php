<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait OptionsSelect {

    protected ?array $options_select = null;


    /**
     * Установка списка значений
     * @param array|null $options
     * @return self
     */
    public function setOptions(array $options = null): self {

        if ($options === null) {
            $this->options_select = null;

        } else {
            $datalist_items = [];

            foreach ($options as $key => $option) {
                if (is_string($option) || is_numeric($option)) {
                    $datalist_items[] = [
                        'value' => $key,
                        'text'  => $option,
                    ];

                } elseif (is_array($option)) {

                    if (isset($option['type']) && $option['type'] == 'group') {
                        if ( ! empty($option['options'])) {
                            $datalist_items[] = $option;
                        }

                    } elseif (isset($option['value']) &&
                        (is_string($option['value']) || is_numeric($option['value']))
                    ) {
                        $datalist_items[] = $option;
                    }
                }
            }

            $this->options_select = $datalist_items;
        }
        return $this;
    }


    /**
     * Получение списка значений
     * @return array|null
     */
    public function getOptions():? array {
        return $this->options_select;
    }
}