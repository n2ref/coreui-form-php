<?php
namespace CoreUI\Form\Field\Dataset;
use CoreUI\Form\Trait;


/**
 *
 */
class Datetime extends Input {

    /**
     * @param string      $name
     * @param string|null $title
     */
    public function __construct(string $name, string $title = null) {

        parent::__construct('datetime-local', $name, $title);
    }
}