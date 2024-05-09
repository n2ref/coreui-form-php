<?php
namespace CoreUI\Form\Field;


/**
 *
 */
class Range extends Text {


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = parent::toArray();
        $result['type'] = 'range';

        return $result;
    }
}