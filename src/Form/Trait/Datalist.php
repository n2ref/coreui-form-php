<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Datalist {

    protected ?array $datalist = null;


    /**
     * Установка списка значений
     * @param array|null $datalist
     * @return self
     */
    public function setDatalist(array $datalist = null): self {

        if ($datalist === null) {
            $this->datalist = null;

        } else {
            $datalist_items = [];

            foreach ($datalist as $item) {
                if (is_string($item) || is_numeric($item)) {
                    $datalist[] = ['value' => $item];

                } elseif (is_array($item) &&
                          isset($item['value']) &&
                          (is_string($item['value']) || is_numeric($item['value']))
                ) {
                    $datalist_item = [
                        'value' => $item['value']
                    ];

                    if (isset($item['label']) &&
                        (is_string($item['label']) || is_numeric($item['label']))
                    ) {
                        $datalist_item['label'] = $item['label'];
                    }

                    $datalist[] = $datalist_item;
                }
            }

            $this->datalist = $datalist_items;
        }
        return $this;
    }


    /**
     * Получение списка значений
     * @return array|null
     */
    public function getDatalist():? array {
        return $this->datalist;
    }
}