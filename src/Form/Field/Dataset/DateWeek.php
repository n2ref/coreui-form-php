<?php
namespace CoreUI\Form\Field\Dataset;
use CoreUI\Form\Trait;


/**
 *
 */
class DateWeek extends Input {

    /**
     * @param string      $name
     * @param string|null $title
     */
    public function __construct(string $name, string $title = null) {

        parent::__construct('week', $name, $title);
    }
}