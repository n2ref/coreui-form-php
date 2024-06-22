<?php
namespace CoreUI;


/**
 *
 */
class Form {

    protected ?string               $id                = null;
    protected ?string               $title             = null;
    protected ?string               $layout            = null;
    protected ?string               $lang              = null;
    protected ?array                $lang_list         = null;
    protected ?bool                 $readonly          = null;
    protected ?bool                 $validate          = null;
    protected ?array                $send              = null;
    protected ?array                $valid_response    = null;
    protected ?string               $success_load_url  = null;
    protected ?string               $error_class       = null;
    protected string|int|float|null $width             = null;
    protected string|int|float|null $width_min         = null;
    protected string|int|float|null $width_max         = null;
    protected string|int|float|null $width_label       = null;
    protected string|int|float|null $controls_offset   = null;
    protected string|int|float|null $width_fields      = null;
    protected ?string               $on_submit         = null;
    protected ?string               $on_submit_success = null;
    protected array                 $fields            = [];
    protected array                 $controls          = [];
    protected array                 $record            = [];


    const DATA_FORM = 'form';
    const DATA_JSON = 'json';


    /**
     * @param string|null $form_id
     */
    public function __construct(string $form_id = null) {

        if ($form_id) {
            $this->id = $form_id;
        }
    }


    /**
     * Установка заголовка
     * @param string|null $title
     * @return self
     */
	public function setTitle(string $title = null): self {

        $this->title = $title;
        return $this;
	}


    /**
     * Получение заголовка
     * @return string|null
     */
	public function getTitle():? string {

        return $this->title;
	}


    /**
     * Установка языка
     * @param string|null $lang
     * @return self
     */
	public function setLang(string $lang = null): self {

        $this->lang = $lang;
        return $this;
	}


    /**
     * Получение языка
     * @return string|null
     */
	public function getLang():? string {

        return $this->lang;
	}


    /**
     * Установка фраз переводов
     * @param array|null $lang_items
     * @return $this
     */
	public function setLangItems(array $lang_items = null): self {

        $this->lang_list = $lang_items;
        return $this;
	}


    /**
     * Получение фраз переводов
     * @return array|null
     */
	public function getLangList():? array {

        return $this->lang_list;
	}


    /**
     * Установка шаблона формы
     * @param string|null $layout
     * @return self
     */
	public function setLayout(string $layout = null): self {

        $this->layout = $layout;
        return $this;
	}


    /**
     * Получение шаблона формы
     * @return string|null
     */
	public function getLayout():? string {

        return $this->layout;
	}


    /**
     * Установка состояния только для чтения
     * @param bool|null $readonly
     * @return $this
     */
    public function setReadonly(bool $readonly = null): self {

        $this->readonly = $readonly;
        return $this;
    }


    /**
     * Получение состояния только для чтения
     * @return bool|null
     */
    public function getReadonly():? bool {
        return $this->readonly;
    }


    /**
     * Установка признака валидации
     * @param bool|null $validate
     * @return $this
     */
    public function setValidate(bool $validate = null): self {

        $this->validate = $validate;
        return $this;
    }


    /**
     * Получение признака валидации
     * @return bool|null
     */
    public function getValidate():? bool {
        return $this->validate;
    }


    /**
     * Установка данных для отправки формы
     * @param string|null $url
     * @param string      $http_method
     * @param string      $data_type
     * @return $this
     */
	public function setSend(string $url = null, string $http_method = 'post', string $data_type = 'form'): self {

        if ($url === null) {
            $this->send = null;

        } else {
            $this->send = [
                'url'    => $url,
                'method' => $http_method,
                'format' => $data_type,
            ];
        }

        return $this;
	}


    /**
     * Получение данных для отправки формы
     * @return array|null
     */
    public function getSend():? array {
        return $this->send;
    }


    /**
     * Установка валидных заголовков в ответе
     * @param array|null $headers
     * @return $this
     */
	public function setValidResponseHeaders(array $headers = null): self {

        if ($headers === null) {
            if ( ! empty($this->valid_response) &&
                 array_key_exists('headers', $this->valid_response)
            ) {
                unset($this->valid_response['headers']);
            }

            if (empty($this->valid_response)) {
                $this->valid_response = null;
            }

        } else {
            if (empty($this->valid_response)) {
                $this->valid_response = [];
            }

            $this->valid_response['headers'] = $headers;
        }

        return $this;
	}


    /**
     * Установка валидного типа данных в ответе
     * @param array|null $types
     * @return $this
     */
	public function setValidResponseType(array $types = null): self {

        if ($types === null) {
            if ( ! empty($this->valid_response) &&
                 array_key_exists('dataType', $this->valid_response)
            ) {
                unset($this->valid_response['dataType']);
            }

            if (empty($this->valid_response)) {
                $this->valid_response = null;
            }

        } else {
            if (empty($this->valid_response)) {
                $this->valid_response = [];
            }

            $this->valid_response['dataType'] = $types;
        }

        return $this;
	}


    /**
     * Получение валидных данных в ответе
     * @return array|null
     */
    public function getValidResponse():? array {
        return $this->valid_response;
    }


    /**
     * Установка ширины формы
     * @param string|int|float|null $width
     * @return self
     */
	public function setWidth(string|int|float $width = null): self {

        $this->width = $width;
        return $this;
	}


    /**
     * Получение ширины формы
     * @return string|int|float|null
     */
	public function getWidth(): string|int|float|null {
        return $this->width;
	}


    /**
     * Установка минимальной ширины формы
     * @param string|int|float|null $width_min
     * @return self
     */
	public function setWidthMin(string|int|float $width_min = null): self {

        $this->width_min = $width_min;
        return $this;
	}


    /**
     * Получение минимальной ширины формы
     * @return string|int|float|null
     */
	public function getWidthMin(): string|int|float|null {
        return $this->width_min;
	}


    /**
     * Установка максимальной ширины формы
     * @param string|int|float|null $width_max
     * @return self
     */
	public function setWidthMax(string|int|float $width_max = null): self {

        $this->width_max = $width_max;
        return $this;
	}


    /**
     * Получение максимальной ширины формы
     * @return string|int|float|null
     */
	public function getWidthMax(): string|int|float|null {
        return $this->width_max;
	}


    /**
     * Установка ширины для названий полей формы по умолчанию
     * @param string|int|float|null $width_label
     * @return self
     */
	public function setWidthLabel(string|int|float $width_label = null): self {

        $this->width_label = $width_label;
        return $this;
	}


    /**
     * Получение ширины для названий полей формы по умолчанию
     * @return string|int|float|null
     */
	public function getWidthLabel(): string|int|float|null {
        return $this->width_label;
	}


    /**
     * Установка ширины для полей формы по умолчанию
     * @param string|int|float|null $width_fields
     * @return self
     */
	public function setWidthFields(string|int|float $width_fields = null): self {

        $this->width_fields = $width_fields;
        return $this;
	}


    /**
     * Получение ширины для полей формы по умолчанию
     * @return string|int|float|null
     */
	public function getWidthFields(): string|int|float|null {
        return $this->width_fields;
	}


    /**
     * Установка ширины отступа для элементов управления
     * @param string|int|float|null $controls_offset
     * @return self
     */
	public function setControlsOffset(string|int|float $controls_offset = null): self {

        $this->controls_offset = $controls_offset;
        return $this;
	}


    /**
     * Получение ширины отступа для элементов управления
     * @return string|int|float|null
     */
	public function getWidthControls(): string|int|float|null {
        return $this->controls_offset;
	}


    /**
     * Установка адреса куда будет перенаправлен пользователь после успешного выполнения формы
     * @param string|null $success_load_url
     * @return $this
     */
	public function setSuccessLoadUrl(string $success_load_url = null): self {

        $this->success_load_url = $success_load_url;
        return $this;
	}


    /**
     * Получение адреса куда будет перенаправлен пользователь после успешного выполнения формы
     * @return string|null
     */
	public function getSuccessLoadUrl():? string {

        return $this->success_load_url;
	}


    /**
     * Установка css классов которые будут добавлены в сообщение об ошибке
     * @param string|null $error_class
     * @return $this
     */
	public function setErrorClass(string $error_class = null): self {

        $this->error_class = $error_class;
        return $this;
	}


    /**
     * Получение css классов которые будут добавлены в сообщение об ошибке
     * @return string|null
     */
	public function getErrorClass():? string {

        return $this->error_class;
	}


    /**
     * Установка события выполняемого перед отправкой формы
     * @param string|null $func
     * @return $this
     */
	public function setOnSubmit(string $func = null): self {
        $this->on_submit = $func;
        return $this;
	}


    /**
     * Получение события выполняемого перед отправкой формы
     * @return string|null
     */
	public function getOnSubmit():? string {
        return $this->on_submit;
	}


    /**
     * Установка события выполняемого при успешной отправке формы
     * @param string|null $func
     * @return $this
     */
	public function setOnSubmitSuccess(string $func = null): self {
        $this->on_submit_success = $func;
        return $this;
	}


    /**
     * Получение события выполняемого при успешной отправке формы
     * @return string|null
     */
	public function getOnSubmitSuccess():? string {
        return $this->on_submit_success;
	}


    /**
     * Установка данных объекта формы
     * @param array $record
     * @return $this
     */
	public function setRecord(array $record): self {
        $this->record = $record;
        return $this;
	}


    /**
     * Получение данных объекта формы
     * @return array
     */
	public function getRecord(): array {

        return $this->record;
	}


    /**
     * Добавление полей
     * @param array       $fields
     * @param string|null $position
     * @return self
     */
	public function addFields(array $fields, string $position = null): self {

        foreach ($fields as $field) {
            if ($field instanceof Form\Abstract\Field) {

                if ( ! is_null($position)) {
                    $field->setPosition($position);
                }

                $this->fields[] = $field;
            }
        }

        return $this;
    }


    /**
     * Получение поля по его имени
     * @param string $name
     * @return Form\Abstract\Field|null
     */
	public function getFieldByName(string $name):? Form\Abstract\Field {

        foreach ($this->fields as $field) {
            if ($field instanceof Form\Abstract\Field &&
                isset($field->name) &&
                $field->name == $name
            ) {
                return $field;
            }
        }

        return null;
    }


    /**
     * Очистка установленных полей
     * @return $this
     */
	public function clearFields(): self {

        $this->fields[] = [];
        return $this;
    }


    /**
     * Добавление контролов для формы
     * @param array $controls
     * @return self
     */
	public function addControls(array $controls): self {

        foreach ($controls as $control) {
            if ($control instanceof Form\Abstract\Control) {
                $this->controls[] = $control;
            }
        }

        return $this;
    }


    /**
     * Очистка установленных контролов формы
     * @return $this
     */
	public function clearControls(): self {

        $this->controls[] = null;
        return $this;
    }


    /**
     * Преобразование в массив
     * @return array
     */
	public function toArray(): array {

        $fields   = [];
        $controls = [];


        foreach ($this->fields as $field) {
            if ($field instanceof Form\Abstract\Field) {
                $fields[] = $field->toArray();
            }
        }

        foreach ($this->controls as $control) {
            if ($control instanceof Form\Abstract\Control) {
                $controls[] = $control->toArray();
            }
        }

        $result = [
            'component' => 'coreui.form',
        ];

        if ( ! is_null($this->id)) {
            $result['id'] = $this->id;
        }
        if ( ! is_null($this->title)) {
            $result['title'] = $this->title;
        }
        if ( ! is_null($this->error_class)) {
            $result['errorClass'] = $this->error_class;
        }
        if ( ! is_null($this->success_load_url)) {
            $result['successLoadUrl'] = $this->success_load_url;
        }
        if ( ! is_null($this->on_submit)) {
            $result['onSubmit'] = $this->on_submit;
        }
        if ( ! is_null($this->on_submit_success)) {
            $result['onSubmitSuccess'] = $this->on_submit_success;
        }
        if ( ! is_null($this->lang)) {
            $result['lang'] = $this->lang;
        }
        if ( ! is_null($this->lang_list)) {
            $result['langList'] = $this->lang_list;
        }
        if ( ! is_null($this->readonly)) {
            $result['readonly'] = $this->readonly;
        }
        if ( ! is_null($this->validate)) {
            $result['validate'] = $this->validate;
        }

        if ( ! is_null($this->width)) {
            $result['width'] = $this->width;
        }
        if ( ! is_null($this->width_max)) {
            $result['maxWidth'] = $this->width_max;
        }
        if ( ! is_null($this->width_min)) {
            $result['minWidth'] = $this->width_min;
        }
        if ( ! is_null($this->width_fields)) {
            $result['fieldWidth'] = $this->width_fields;
        }
        if ( ! is_null($this->width_label)) {
            $result['labelWidth'] = $this->width_label;
        }
        if ( ! is_null($this->controls_offset)) {
            $result['controlsOffset'] = $this->controls_offset;
        }

        if ( ! is_null($this->layout)) {
            $result['layout'] = $this->layout;
        }
        if ( ! is_null($this->send)) {
            $result['send'] = $this->send;
        }
        if ( ! is_null($this->valid_response)) {
            $result['validResponse'] = $this->valid_response;
        }
        if ( ! is_null($fields)) {
            $result['fields'] = $fields;
        }
        if ( ! is_null($controls)) {
            $result['controls'] = $controls;
        }

        $result['record'] = $this->record;

        return $result;
    }
}