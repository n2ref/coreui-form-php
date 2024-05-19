<?php
namespace CoreUI\Form\Field;
use CoreUI\Form\Abstract;
use CoreUI\Form\Trait;


/**
 *
 */
class Toggle extends Abstract\Field {

    use Trait\Name;
    use Trait\Label;
    use Trait\Description;
    use Trait\WidthLabel;
    use Trait\Attributes;
    use Trait\ValueY;
    use Trait\ValueN;
    use Trait\Required;
    use Trait\InvalidText;
    use Trait\ValidText;
    use Trait\OutContent;
    use Trait\Show;
    use Trait\Fields;


    /**
     * @param string      $name
     * @param string|null $title
     */
    private function __construct(string $name, string $title = null) {

        $this->setName($name);
        $this->setLabel($title);
    }


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = [
            'type' => 'switch'
        ];

        if ( ! is_null($this->name)) {
            $result['name'] = $this->name;
        }
        if ( ! is_null($this->label)) {
            $result['label'] = $this->label;
        }
        if ( ! is_null($this->description)) {
            $result['description'] = $this->description;
        }
        if ( ! is_null($this->required)) {
            $result['required'] = $this->required;
        }
        if ( ! is_null($this->width_label)) {
            $result['widthLabel'] = $this->width_label;
        }
        if ( ! is_null($this->invalid_text)) {
            $result['invalidText'] = $this->invalid_text;
        }
        if ( ! is_null($this->valid_text)) {
            $result['valid_text'] = $this->valid_text;
        }
        if ( ! is_null($this->out_content)) {
            $result['outContent'] = $this->out_content;
        }
        if ( ! is_null($this->show)) {
            $result['show'] = $this->show;
        }
        if ( ! is_null($this->position)) {
            $result['position'] = $this->position;
        }
        if ( ! is_null($this->value_y)) {
            $result['valueY'] = $this->value_y;
        }
        if ( ! is_null($this->value_n)) {
            $result['valueN'] = $this->value_n;
        }
        if ( ! is_null($this->attr)) {
            $result['attr'] = $this->attr;
        }

        if ( ! is_null($this->fields)) {
            $fields = [];

            foreach ($this->fields as $field) {
                if ($field instanceof Abstract\Field) {
                    $fields[] = $field->toArray();
                }
            }

            $result['fields'] = $fields;
        }

        return $result;
    }
}