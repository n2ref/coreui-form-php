<?php
namespace CoreUI\Form\Field;


/**
 *
 */
class Email extends Text {


    /**
     * @return array
     */
    public function toArray(): array {

        $result = parent::toArray();
        $result['type'] = 'email';

        return $result;
    }
}