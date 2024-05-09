<?php
namespace CoreUI\Form\Field\Dataset;
use CoreUI\Form\Trait;


/**
 *
 */
class Text extends Input {

    /**
     * @param string      $name
     * @param string|null $title
     */
    public function __construct(string $name, string $title = null) {

        parent::__construct('text', $name, $title);
    }
}