<?php
namespace CoreUI\Form\Field;


/**
 *
 */
class Datetime extends Text {


    /**
     * @return array
     */
    public function toArray(): array {

        $result = parent::toArray();
        $result['type'] = 'datetime-local';

        return $result;
    }
}