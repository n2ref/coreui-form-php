<?php
namespace CoreUI\Form\Control;
use CoreUI\Form\Abstract;
use CoreUI\Form\Trait;



/**
 *
 */
class Custom extends Abstract\Control {

    use Trait\Content;
    use Trait\Show;


    /**
     * @param string $content
     */
    public function __construct(string $content) {

        $this->content = $content;
    }


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = [
            'type' => 'custom'
        ];

        if ( ! is_null($this->content)) {
            $result['content'] = $this->content;
        }
        if ( ! is_null($this->show)) {
            $result['show'] = $this->show;
        }

        return $result;
    }
}