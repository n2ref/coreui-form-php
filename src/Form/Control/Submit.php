<?php
namespace CoreUI\Form\Control;



/**
 *
 */
class Submit extends Button {

    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = parent::toArray();
        $result['type'] = 'submit';

        return $result;
    }
}