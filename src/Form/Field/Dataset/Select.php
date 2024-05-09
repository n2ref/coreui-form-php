<?php
namespace CoreUI\Form\Field\Dataset;
use CoreUI\Form\Trait;


/**
 *
 */
class Select extends Type {

    use Trait\Attributes;
    use Trait\OptionsList;


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = [
            'type'  => 'select',
            'name'  => $this->name,
            'title' => $this->title,
        ];

        if ( ! is_null($this->options_list)) {
            $result['items'] = $this->options_list;
        }
        if ( ! is_null($this->attr)) {
            $result['attr'] = $this->attr;
        }

        return $result;
    }
}