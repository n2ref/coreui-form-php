<?php
namespace CoreUI\Form\Field;
use CoreUI\Form\Abstract;
use CoreUI\Form\Trait;


/**
 *
 */
class Group extends Abstract\Field {

    use Trait\Label;
    use Trait\Show;
    use Trait\Fields;

    protected ?bool $show_collapsible = null;


    /**
     * @param string|null $label
     */
    private function __construct(string $label = null) {

        $this->setLabel($label);
    }


    /**
     * Установка отображения поля
     * @param bool|null $show
     * @return self
     */
    public function setShowCollapsible(bool $show = null): self {
        $this->show_collapsible = $show;
        return $this;
    }


    /**
     * Получение отображения поля
     * @return bool|null
     */
    public function getShowCollapsible():? bool {
        return $this->show_collapsible;
    }


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = [
            'type' => 'group'
        ];

        if ( ! is_null($this->label)) {
            $result['label'] = $this->label;
        }
        if ( ! is_null($this->show)) {
            $result['show'] = $this->show;
        }
        if ( ! is_null($this->show_collapsible)) {
            $result['showCollapsible'] = $this->show_collapsible;
        }
        if ( ! is_null($this->position)) {
            $result['position'] = $this->position;
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