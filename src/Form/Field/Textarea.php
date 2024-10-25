<?php
namespace CoreUI\Form\Field;
use CoreUI\Form\Abstract;
use CoreUI\Form\Trait;


/**
 *
 */
class Textarea extends Abstract\Field {

    use Trait\Name;
    use Trait\Label;
    use Trait\Description;
    use Trait\DescriptionLabel;
    use Trait\Help;
    use Trait\Width;
    use Trait\Height;
    use Trait\WidthLabel;
    use Trait\Attributes;
    use Trait\Required;
    use Trait\InvalidText;
    use Trait\ValidText;
    use Trait\Prefix;
    use Trait\Suffix;
    use Trait\Show;
    use Trait\Fields;
    use Trait\NoSend;

    /**
     * @param string      $name
     * @param string|null $title
     */
    public function __construct(string $name, string $title = null) {

        $this->setName($name);
        $this->setLabel($title);
    }


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = [
            'type' => 'textarea'
        ];

        if ( ! is_null($this->name)) {
            $result['name'] = $this->name;
        }
        if ( ! is_null($this->label)) {
            $result['label'] = $this->label;
        }
        if ( ! is_null($this->help)) {
            $result['help'] = $this->help;
        }
        if ( ! is_null($this->description)) {
            $result['description'] = $this->description;
        }
        if ( ! is_null($this->description_label)) {
            $result['descriptionLabel'] = $this->description_label;
        }
        if ( ! is_null($this->required)) {
            $result['required'] = $this->required;
        }
        if ( ! is_null($this->width)) {
            $result['width'] = $this->width;
        }
        if ( ! is_null($this->height)) {
            $result['height'] = $this->height;
        }
        if ( ! is_null($this->width_label)) {
            $result['widthLabel'] = $this->width_label;
        }
        if ( ! is_null($this->invalid_text)) {
            $result['invalidText'] = $this->invalid_text;
        }
        if ( ! is_null($this->valid_text)) {
            $result['validText'] = $this->valid_text;
        }
        if ( ! is_null($this->prefix)) {
            $result['prefix'] = $this->prefix;
        }
        if ( ! is_null($this->suffix)) {
            $result['suffix'] = $this->suffix;
        }
        if ( ! is_null($this->show)) {
            $result['show'] = $this->show;
        }
        if ( ! is_null($this->position)) {
            $result['position'] = $this->position;
        }
        if ( ! is_null($this->attr)) {
            $result['attr'] = $this->attr;
        }
        if ( ! is_null($this->no_send)) {
            $result['noSend'] = $this->no_send;
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