<?php
namespace CoreUI\Form\Field;


/**
 *
 */
class Date extends Text {


    /**
     * @return array
     */
    public function toArray(): array {

        $result = parent::toArray();
        $result['type'] = 'date';

        return $result;
    }
}