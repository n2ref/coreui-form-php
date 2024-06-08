<?php
namespace CoreUI\Form\Trait;


/**
 *
 */
trait Attributes {

    private ?array $attr = null;

    /**
     * Установка значения атрибута
     * @param string $name
     * @param string $value
     * @return self
     */
    public function setAttr(string $name, string $value = ''): self {

        if (is_null($this->attr)) {
            $this->attr = [];
        }

        $this->attr[$name] = $value;

        return $this;
    }


    /**
     * Установка значения в начале атрибута
     * @param string $name
     * @param string $value
     * @return self
     */
    public function setAttrPrepend(string $name, string $value = ''): self {

        if (is_null($this->attr)) {
            $this->attr = [];
        }

        $this->attr[$name] = array_key_exists($name, $this->attr)
            ? $value . $this->attr[$name]
            : $value;

        return $this;
    }


    /**
     * Установка значения в конце атрибута
     * @param string $name
     * @param string $value
     * @return self
     */
    public function setAttrAppend(string $name, string $value = ''): self {

        if (is_null($this->attr)) {
            $this->attr = [];
        }

        $this->attr[$name] = array_key_exists($name, $this->attr)
            ? $this->attr[$name] . $value
            : $value;

        return $this;
    }


    /**
     * Добавление класса
     * @param string $value
     * @return self
     */
    public function addAttrClass(string $value): self {

        if (is_null($this->attr)) {
            $this->attr = [];
        }

        $value = trim($value);

        if ($value != '') {
            $name = 'class';

            if (array_key_exists($name, $this->attr)) {
                $classes = explode(' ', $value);

                foreach ($classes as $class) {
                    $class_quote = preg_quote($class);

                    if (preg_match("~(^| ){$class_quote}( |$)~", $this->attr[$name]) === false) {
                        $this->attr[$name] .= " {$class}";
                    }
                }

            } else {
                $this->attr[$name] = $value;
            }
        }

        return $this;
    }


    /**
     * Удаление класса
     * @param string $value
     * @return self
     */
    public function removeAttrClass(string $value): self {

        if ( ! is_null($this->attr)) {
            $value = trim($value);

            if ($value != '') {
                $classes = explode(' ', $value);
                $name    = 'class';

                if (array_key_exists($name, $this->attr)) {
                    foreach ($classes as $class) {
                        if ($class) {
                            $class_quote = preg_quote($class);

                            $this->attr[$name] = preg_replace("~(^| ){$class_quote}( |$)~", '', $this->attr[$name]);
                        }
                    }
                }
            }
        }

        return $this;
    }


    /**
     * Установка атрибутов
     * @param array $attributes
     * @return self
     */
    public function setAttributes(array $attributes): self {

        if (is_null($this->attr)) {
            $this->attr = [];
        }

        foreach ($attributes as $attr => $value) {
            if (is_string($value) || is_numeric($value)) {
                $this->attr[$attr] = $value;
            }
        }

        return $this;
    }


    /**
     * Получение всех атрибутов
     * @return array|null
     */
    public function getAttributes():? array {
        return $this->attr;
    }


    /**
     * @param string $name
     * @return string|null
     */
    public function getAttr(string $name):? string {

        if ($this->attr && array_key_exists($name, $this->attr)) {
            return $this->attr[$name];
        } else {
            return null;
        }
    }
}