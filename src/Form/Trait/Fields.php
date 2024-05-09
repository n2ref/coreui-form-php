<?php
namespace CoreUI\Form\Trait;
use CoreUI\Form\Abstract;

/**
 *
 */
trait Fields {

    protected ?array  $fields           = null;
    protected ?string $fields_direction = null;


    /**
     * Установка доп полей
     * @param array|null $fields
     * @return self
     */
    public function attachFields(array $fields = null): self {

        if (empty($this->fields)) {
            $this->fields = [];
        }

        foreach ($fields as $field) {
            if ($field instanceof Abstract\Field) {
                $this->fields[] = $field;
            }
        }

        return $this;
    }


    /**
     * Получение доп полей
     * @return array|null
     */
    public function getAttachFields():? array {

        return $this->fields;
    }


    /**
     * Очистка доп полей
     * @return self
     */
    public function clearAttachFields(): self {

        $this->fields = null;
        return $this;
    }


    /**
     * Установка направления позиционирования полей
     * @param string|null $fields_direction
     * @return self
     */
    public function setFieldsDirection(string $fields_direction = null): self {
        $this->fields_direction = $fields_direction;
        return $this;
    }


    /**
     * Получение направления позиционирования полей
     * @return string|null
     */
    public function getFieldsDirection():? string {
        return $this->fields_direction;
    }
}