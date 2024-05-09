<?php
namespace CoreUI\Form\Field;
use CoreUI\Form\Abstract;
use CoreUI\Form\Trait;


/**
 *
 */
class Hidden extends Abstract\Field {

    use Trait\Name;


    /**
     * @param string $name
     */
    private function __construct(string $name) {

        $this->setName($name);
    }


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = [
            'type' => 'hidden',
        ];

        if ( ! is_null($this->name)) {
            $result['name'] = $this->name;
        }

        return $result;
    }
}