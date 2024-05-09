<?php
namespace CoreUI\Form\Control;
use CoreUI\Form\Abstract;
use CoreUI\Form\Trait;



/**
 *
 */
class Button extends Abstract\Control {

    use Trait\Content;
    use Trait\OnClick;
    use Trait\Show;
    use Trait\Attributes;


    /**
     * @param string $content
     */
    public function __construct(string $content) {

        $this->setContent($content);
    }


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = [
            'type' => 'button'
        ];

        if ( ! is_null($this->content)) {
            $result['content'] = $this->content;
        }
        if ( ! is_null($this->show)) {
            $result['show'] = $this->show;
        }
        if ( ! is_null($this->onclick)) {
            $result['onClick'] = $this->onclick;
        }
        if ( ! is_null($this->attr)) {
            $result['attr'] = $this->attr;
        }

        return $result;
    }
}