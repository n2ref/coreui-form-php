<?php
namespace CoreUI\Form\Field;
use CoreUI\Form\Abstract;
use CoreUI\Form\Trait;


/**
 *
 */
class Custom extends Abstract\Field {

    use Trait\Name;
    use Trait\Label;
    use Trait\Description;
    use Trait\DescriptionLabel;
    use Trait\Help;
    use Trait\WidthLabel;
    use Trait\Required;
    use Trait\Show;
    use Trait\Fields;
    use Trait\NoSend;

    protected array|string|int|float|null $content = null;


    /**
     * @param string      $name
     * @param string|null $title
     */
    public function __construct(string $name, string $title = null) {

        $this->setName($name);
        $this->setLabel($title);
    }


    /**
     * Установка содержимого поля
     * @param array|string|int|float|null $content
     * @return self
     */
    public function setContent(array|string|int|float $content = null): self {
        $this->content = $content;
        return $this;
    }


    /**
     * Получение содержимого поля
     * @return array|string|int|float|null
     */
    public function getContent(): array|string|int|float|null {
        return $this->content;
    }


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = [
            'type' => 'custom',
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
        if ( ! is_null($this->content)) {
            $result['content'] = $this->content;
        }

        return $result;
    }
}