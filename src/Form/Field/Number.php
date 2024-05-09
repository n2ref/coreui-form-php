<?php
namespace CoreUI\Form\Field;


/**
 *
 */
class Number extends Text {

    protected ?int $precision = null;


    /**
     * Установка количества знаков после запятой
     * @param int|null $precision
     * @return self
     */
    public function setPrecision(int $precision = null): self {
        $this->precision = $precision;
        return $this;
    }


    /**
     * Получение количества знаков после запятой
     * @return string|null
     */
    public function getPrecision():? string {
        return $this->precision;
    }


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = parent::toArray();
        $result['type'] = 'number';

        if ( ! is_null($this->precision)) {
            $result['precision'] = $this->precision;
        }

        return $result;
    }
}