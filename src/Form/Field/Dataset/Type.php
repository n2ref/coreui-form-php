<?php
namespace CoreUI\Form\Field\Dataset;

/**
 *
 */
abstract class Type {

    protected ?string $name  = null;
    protected ?string $title = null;

    /**
     * @param string      $name
     * @param string|null $title
     */
    public function __construct(string $name, string $title = null) {

        $this->name  = $name;
        $this->title = $title;
    }


    /**
     * Преобразование в массив
     * @return array
     */
    abstract public function toArray(): array;
}