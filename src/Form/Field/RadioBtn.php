<?php
namespace CoreUI\Form\Field;

use CoreUI\Form\Trait;


/**
 *
 */
class RadioBtn extends Radio {

    use Trait\OptionsClass;


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = parent::toArray();

        $result['type'] = 'radioBtn';

        if ( ! is_null($this->options_class)) {
            $result['optionsClass'] = $this->options_class;
        }

        return $result;
    }
}