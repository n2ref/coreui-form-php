<?php
namespace CoreUI\Form\Abstract;
use CoreUI\Form\Trait;

/**
 *
 */
abstract class Field {

    use Trait\Position;

    /**
     * Преобразование в массив
     * @return array
     */
    abstract public function toArray(): array;
}