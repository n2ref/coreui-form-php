<?php
namespace CoreUI\Form\Field;


/**
 *
 */
class Checkbox extends Radio {


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = parent::toArray();

        $result['type'] = 'checkbox';

        return $result;
    }
}