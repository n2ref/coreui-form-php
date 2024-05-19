<?php
namespace CoreUI\Form\Field;
use CoreUI\Form\Abstract;
use CoreUI\Form\Trait;


/**
 *
 */
class Wysiwyg extends Abstract\Field {

    use Trait\Name;
    use Trait\Label;
    use Trait\Description;
    use Trait\Width;
    use Trait\WidthMin;
    use Trait\WidthMax;
    use Trait\WidthLabel;
    use Trait\Height;
    use Trait\HeightMin;
    use Trait\HeightMax;
    use Trait\Attributes;
    use Trait\Required;
    use Trait\InvalidText;
    use Trait\ValidText;
    use Trait\OutContent;
    use Trait\Show;
    use Trait\Fields;

    const TYPE_SIMPLE = 'simple';

    protected array|string|null $options = null;


    /**
     * @param string      $name
     * @param string|null $label
     */
    private function __construct(string $name, string $label = null) {

        $this->setName($name);
        $this->setLabel($label);
    }


    /**
     * Установка настроек редактора
     * @param array|string|null $options
     * @return self
     */
    public function setOptions(array|string $options = null): self {

        $this->options = $options;
        return $this;
    }


    /**
     * Получение настроек редактора
     * @return array|string|null
     */
    public function getOptions(): array|string|null {
        return $this->options;
    }

    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = [
            'type' => 'wysiwyg'
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
        if ( ! is_null($this->width)) {
            $result['width'] = $this->width;
        }
        if ( ! is_null($this->width_min)) {
            $result['width_min'] = $this->width_min;
        }
        if ( ! is_null($this->width_max)) {
            $result['width_max'] = $this->width_max;
        }
        if ( ! is_null($this->width_label)) {
            $result['widthLabel'] = $this->width_label;
        }
        if ( ! is_null($this->height)) {
            $result['height_min'] = $this->height_min;
        }
        if ( ! is_null($this->width_max)) {
            $result['width_max'] = $this->width_max;
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
        if ( ! is_null($this->options)) {
            $result['options'] = $this->options;
        }
        if ( ! is_null($this->position)) {
            $result['position'] = $this->position;
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