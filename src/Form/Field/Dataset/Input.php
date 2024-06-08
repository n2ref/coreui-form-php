<?php
namespace CoreUI\Form\Field\Dataset;
use CoreUI\Form\Trait;


/**
 *
 */
class Input extends Type {

    use Trait\Attributes;
    use Trait\Width;

    protected string $type;


    /**
     * @param string      $type
     * @param string      $name
     * @param string|null $title
     */
    public function __construct(string $type, string $name, string $title = null) {

        parent::__construct($name, $title);

        $this->type = $type;
    }


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = [
            'type'  => $this->type,
            'name'  => $this->name,
            'title' => $this->title,
        ];

        if ( ! is_null($this->attr)) {
            $result['attr'] = $this->attr;
        }
        if ( ! is_null($this->width)) {
            $result['width'] = $this->width;
        }

        return $result;
    }
}