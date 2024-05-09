<?php
namespace CoreUI\Form\Field;


/**
 *
 */
class Time extends Text {

    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = parent::toArray();
        $result['type'] = 'time';

        return $result;
    }
}