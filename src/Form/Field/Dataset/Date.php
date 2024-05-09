<?php
namespace CoreUI\Form\Field\Dataset;


/**
 *
 */
class Date extends Input {

    /**
     * @param string      $name
     * @param string|null $title
     */
    public function __construct(string $name, string $title = null) {

        parent::__construct('date', $name, $title);
    }
}