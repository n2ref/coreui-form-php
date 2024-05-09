<?php
namespace CoreUI\Form\Field\Dataset;
use CoreUI\Form\Trait;


/**
 *
 */
class Toggle extends Type {

    use Trait\Attributes;
    use Trait\ValueY;
    use Trait\ValueN;


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = [
            'type'  => 'switch',
            'name'  => $this->name,
            'title' => $this->title,
        ];

        if ( ! is_null($this->value_y)) {
            $result['valueY'] = $this->value_y;
        }
        if ( ! is_null($this->value_n)) {
            $result['valueN'] = $this->value_n;
        }
        if ( ! is_null($this->attr)) {
            $result['attr'] = $this->attr;
        }

        return $result;
    }
}