<?php
namespace CoreUI\Form\Field;


/**
 *
 */
class DateMonth extends Text {

    /**
     * @return array
     */
    public function toArray(): array {

        $result = parent::toArray();
        $result['type'] = 'month';

        return $result;
    }
}