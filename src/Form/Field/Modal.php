<?php
namespace CoreUI\Form\Field;
use CoreUI\Form\Abstract;
use CoreUI\Form\Trait;


/**
 *
 */
class Modal extends Abstract\Field {

    use Trait\Name;
    use Trait\Label;
    use Trait\Description;
    use Trait\Width;
    use Trait\WidthLabel;
    use Trait\Attributes;
    use Trait\Required;
    use Trait\InvalidText;
    use Trait\ValidText;
    use Trait\OutContent;
    use Trait\Show;
    use Trait\Fields;
    use Trait\NoSend;

    const SIZE_SM   = 'sm';
    const SIZE_MD   = '';
    const SIZE_LG   = 'lg';
    const SIZE_XL   = 'xl';
    const SIZE_FULL = 'fullscreen';

    protected string  $title     = '';
    protected string  $size      = '';
    protected string  $url       = '';
    protected ?string $on_hidden = null;
    protected ?string $on_clear  = null;
    protected ?string $on_change = null;


    /**
     * @param string      $name
     * @param string|null $label
     */
    public function __construct(string $name, string $label = null) {

        $this->setName($name);
        $this->setLabel($label);
    }


    /**
     * Установка ссылки
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url): self {

        $this->url = $url;
        return $this;
    }


    /**
     * Получение ссылки
     * @return string
     */
    public function getUrl(): string {

        return $this->url;
    }


    /**
     * Установка размера модала
     * @param string $size
     * @return $this
     */
    public function setSize(string $size): self {

        $this->size = $size;
        return $this;
    }


    /**
     * Получение размера модала
     * @return string
     */
    public function getSize(): string {
        return $this->size;
    }


    /**
     *  Установка заголовка модала
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): self {

        $this->title = $title;
        return $this;
    }


    /**
     * Получение заголовка модала
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }


    /**
     * Установка события на закрытие
     * @param string|null $on_hidden
     * @return $this
     */
    public function setOnHidden(string $on_hidden = null): self {

        $this->on_hidden = $on_hidden;
        return $this;
    }


    /**
     * Получение события на закрытие
     * @return string|null
     */
    public function getOnHidden():? string {

        return $this->on_hidden;
    }


    /**
     * Установка события на очистку значения
     * @param string|null $on_clear
     * @return $this
     */
    public function setOnClear(string $on_clear = null): self {

        $this->on_clear = $on_clear;
        return $this;
    }


    /**
     * Получение события на очистку значения
     * @return string|null
     */
    public function getOnClear():? string {

        return $this->on_clear;
    }


    /**
     * Установка события на изменение значения
     * @param string|null $on_change
     * @return $this
     */
    public function setOnChange(string $on_change = null): self {

        $this->on_change = $on_change;
        return $this;
    }


    /**
     * Получение события на изменение значения
     * @return string|null
     */
    public function getOnChange():? string {

        return $this->on_change;
    }


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = [
            'type'    => 'modal',
            'options' => [
                'title' => $this->title,
                'size'  => $this->size,
                'url'   => $this->url,
            ],
        ];

        if ( ! is_null($this->on_hidden)) {
            $result['options']['onHidden'] = $this->on_hidden;
        }
        if ( ! is_null($this->on_clear)) {
            $result['options']['onClear'] = $this->on_clear;
        }
        if ( ! is_null($this->on_change)) {
            $result['options']['onChange'] = $this->on_change;
        }

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