<?php
namespace CoreUI\Form\Field;
use CoreUI\Form\Abstract;
use CoreUI\Form\Trait;


/**
 *
 */
class Dataset extends Abstract\Field {

    use Trait\Name;
    use Trait\Label;
    use Trait\Description;
    use Trait\WidthLabel;
    use Trait\Required;
    use Trait\Readonly;
    use Trait\InvalidText;
    use Trait\ValidText;
    use Trait\OutContent;
    use Trait\Show;
    use Trait\Fields;

    protected ?array $options = null;


    /**
     * @param string      $name
     * @param string|null $label
     */
    private function __construct(string $name, string $label = null) {

        $this->setName($name);
        $this->setLabel($label);
    }


    /**
     * Установка полей датасета
     * @param array $options
     * @return self
     */
    public function addOptions(array $options): self {

        foreach ($options as $option) {
            if ($option instanceof Dataset\Type) {
                $this->options[] = $option;
            }
        }

        return $this;
    }


    /**
     * Получение полей датасета
     * @return array|null
     */
    public function getOptions():? array {
        return $this->options;
    }


    /**
     * Очистка установленных полей датасета
     * @return $this
     */
    public function clearOptions(): self {

        $this->options[] = [];

        return $this;
    }



    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = [
            'type' => 'dataset'
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
        if ( ! is_null($this->readonly)) {
            $result['readonly'] = $this->readonly;
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

        if ( ! is_null($this->options)) {
            $options = [];

            foreach ($this->options as $option) {
                if ($option instanceof Dataset\Type) {
                    $options[] = $option->toArray();
                }
            }

            $result['options'] = $options;
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