<?php
namespace CoreUI\Form\Field;


/**
 *
 */
class DateWeek extends Text {

    /**
     * @return array
     */
    public function toArray(): array {

        $result = parent::toArray();
        $result['type'] = 'week';

        return $result;
    }
}