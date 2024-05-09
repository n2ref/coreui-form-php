<?php
namespace CoreUI\Form\Field;


/**
 *
 */
class Color extends Text {


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = parent::toArray();
        $result['type'] = 'color';

        return $result;
    }
}