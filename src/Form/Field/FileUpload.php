<?php
namespace CoreUI\Form\Field;
use CoreUI\Form\Abstract;
use CoreUI\Form\Trait;


/**
 *
 */
class FileUpload extends Abstract\Field {

    use Trait\Name;
    use Trait\Label;
    use Trait\Description;
    use Trait\DescriptionHelp;
    use Trait\FieldReadonly;
    use Trait\Required;
    use Trait\WidthLabel;
    use Trait\InvalidText;
    use Trait\ValidText;
    use Trait\Fields;
    use Trait\Prefix;
    use Trait\Suffix;
    use Trait\Show;
    use Trait\NoSend;

    protected ?string $url           = '';
    protected ?string $http_method   = null;
    protected ?string $accept        = null;
    protected ?bool   $show_input    = null;
    protected ?bool   $show_dropzone = null;
    protected ?bool   $autostart     = true;
    protected ?int    $size_limit    = null;
    protected ?int    $files_limit   = null;
    protected ?string $file_template = null;
    protected ?array  $extra_fields  = null;
    protected array   $files         = [];

    /**
     * @param string      $name
     * @param string|null $label
     */
    public function __construct(string $name, string $label = null) {

        $this->setName($name);
        $this->setLabel($label);
    }


    /**
     * Установка адреса для загружаемых файлов
     * @param string|null $url
     * @return self
     */
    public function setUrl(string $url = null): self {
        $this->url = $url;
        return $this;
    }


    /**
     * Получение адреса для загружаемых файлов
     * @return string|null
     */
    public function getUrl():? string {
        return $this->url;
    }


    /**
     * Установка http метода для загружаемых файлов
     * @param string|null $http_method
     * @return self
     */
    public function setHttpMethod(string $http_method = null): self {
        $this->http_method = $http_method;
        return $this;
    }


    /**
     * Получение http метода для загружаемых файлов
     * @return string|null
     */
    public function getHttpMethod():? string {
        return $this->http_method;
    }


    /**
     * Установка шаблона загружаемых файлов
     * @param string|null $template
     * @return self
     */
    public function setFileTemplate(string $template = null): self {
        $this->file_template = $template;
        return $this;
    }


    /**
     * Получение шаблона загружаемых файлов
     * @return string|null
     */
    public function getFileTemplate():? string {
        return $this->file_template;
    }


    /**
     * Установка свойства с ограничением по типу загружаемых файлов
     * @param string|null $accept
     * @return self
     */
    public function setAccept(string $accept = null): self {
        $this->accept = $accept;
        return $this;
    }


    /**
     * Установка свойства с возможностью загружать только картинки
     * @return self
     */
    public function setAcceptImage(): self {
        $this->accept = 'image/*';
        return $this;
    }


    /**
     * Установка свойства с возможностью загружать только видео
     * @return self
     */
    public function setAcceptVideo(): self {
        $this->accept = 'video/*';
        return $this;
    }


    /**
     * Установка свойства с возможностью загружать только аудио
     * @return self
     */
    public function setAcceptAudio(): self {
        $this->accept = 'audio/*';
        return $this;
    }


    /**
     * Установка свойства с возможностью загружать только PDF
     * @return self
     */
    public function setAcceptPDF(): self {
        $this->accept = 'application/pdf';
        return $this;
    }


    /**
     * Установка свойства с возможностью загружать только zip
     * @return self
     */
    public function setAcceptZip(): self {
        $this->accept = 'application/zip';
        return $this;
    }


    /**
     * Получение свойства с ограничением по типу загружаемых файлов
     * @return string|null
     */
    public function getAccept():? string {
        return $this->accept;
    }


    /**
     * Установка лимита в количестве загружаемых файлов
     * @param int|null $count
     * @return $this
     */
    public function setFilesLimit(int $count = null): self {
        $this->files_limit = $count;
        return $this;
    }


    /**
     * Получение лимита в количестве загружаемых файлов
     * @return int|null
     */
    public function getFilesLimit():? int {

        return $this->files_limit;
    }


    /**
     * Установка лимита в размере загружаемых файлов
     * @param int|null $bytes
     * @return $this
     */
    public function setSizeLimit(int $bytes = null): self {

        $this->size_limit = $bytes;
        return $this;
    }


    /**
     * Установка максимально возможно лимита в размере загружаемых файлов используя настройки сервера
     * @return $this
     */
    public function setSizeLimitServer(): self {

        $max_size = $this->getMaxFileSize();

        if ($max_size) {
            $this->size_limit = $max_size;
        }

        return $this;
    }


    /**
     * Получение лимита в размере загружаемых файлов
     * @return int|null
     */
    public function getSizeLimit():? int {

        return $this->size_limit;
    }


    /**
     * Установка признака автоматической загрузки файлов
     * @param bool|null $is_autostart
     * @return $this
     */
    public function setAutostart(bool $is_autostart = null): self {
        $this->autostart = $is_autostart;
        return $this;
    }


    /**
     * Получение признака автоматической загрузки файлов
     * @return bool|null
     */
    public function getAutostart():? bool {

        return $this->autostart;
    }


    /**
     * Установка признака для отображения поля для выбора файла
     * @param bool|null $show
     * @return $this
     */
    public function setShowInput(bool $show = null): self {
        $this->show_input = $show;
        return $this;
    }


    /**
     * Получение признака для отображения поля для выбора файла
     * @return bool|null
     */
    public function getShowInput():? bool {

        return $this->show_input;
    }


    /**
     * Установка признака для отображения dropzone
     * @param bool|null $show
     * @return $this
     */
    public function setShowDropzone(bool $show = null): self {
        $this->show_dropzone = $show;
        return $this;
    }


    /**
     * Получение признака для отображения dropzone
     * @return bool|null
     */
    public function getShowDropzone():? bool {

        return $this->show_dropzone;
    }


    /**
     * Установка дополнительных полей которые будут отправлены на сервер вместе с файлом
     * @param array|null $fields
     * @return $this
     */
    public function setExtraFields(array $fields = null): self {
        $this->extra_fields = $fields;
        return $this;
    }


    /**
     * Получение дополнительных полей которые будут отправлены на сервер вместе с файлом
     * @return array|null
     */
    public function getExtraFields():? array {

        return $this->extra_fields;
    }


    /**
     * Добавление загруженного ранее файла для отображения его в списке
     * @param string $name
     * @return FileUpload\File
     */
    public function addFile(string $name): FileUpload\File {

        $file = new FileUpload\File($name);

        $this->files[] = $file;

        return $file;
    }


    /**
     * Добавление загруженного ранее файла для отображения его в списке
     * @param string      $file_path
     * @param string|null $name
     * @return FileUpload\File|null
     */
    public function addFileByPath(string $file_path, string $name = null):? FileUpload\File {

        if ( ! $file_path || ! file_exists($file_path)) {
            return null;
        }

        $file = new FileUpload\File($name ?: basename($file_path));


        $filesize = filesize($file_path);

        if ($filesize !== false) {
            $file->setSize(filesize($file_path));
        }


        $mime = mime_content_type($file_path);

        if ($mime !== false) {
            $file->setMimeType($mime);
        }

        $this->files[] = $file;

        return $file;
    }


    /**
     * Добавление загруженных ранее файлов для отображения их в списке
     * @param array $files
     * @return self
     */
    public function addFiles(array $files): self {

        foreach ($files as $file_data) {
            if ( ! is_array($file_data) || empty($file_data['name'])) {
                continue;
            }

            $file = new FileUpload\File($file_data['name']);

            if (isset($file_data['size']) && is_numeric($file_data['size'])) {
                $file->setSize($file_data['size']);
            }
            if (isset($file_data['type']) && is_string($file_data['type'])) {
                $file->setMimeType($file_data['type']);
            }
            if (isset($file_data['url_preview']) && is_string($file_data['url_preview'])) {
                $file->setUrlPreview($file_data['url_preview']);
            }
            if (isset($file_data['url_download']) && is_string($file_data['url_download'])) {
                $file->setUrlDownload($file_data['url_download']);
            }

            $this->files[] = $file;
        }

        return $this;
    }


    /**
     * Очистка ранее добавленных файлов
     * @return self
     */
    public function clearFiles(): self {

        $this->files = [];
        return $this;
    }


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = [
            'type' => 'fileUpload'
        ];


        if ( ! is_null($this->name)) {
            $result['name'] = $this->name;
        }
        if ( ! is_null($this->label)) {
            $result['label'] = $this->label;
        }
        if ( ! is_null($this->description_help)) {
            $result['descriptionHelp'] = $this->description_help;
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
        if ( ! is_null($this->no_send)) {
            $result['noSend'] = $this->no_send;
        }

        $result['options'] = [];

        if ( ! is_null($this->url)) {
            $result['options']['url'] = $this->url;
        }
        if ( ! is_null($this->http_method)) {
            $result['options']['httpMethod'] = $this->http_method;
        }
        if ( ! is_null($this->accept)) {
            $result['options']['accept'] = $this->accept;
        }
        if ( ! is_null($this->files_limit)) {
            $result['options']['filesLimit'] = $this->files_limit;
        }
        if ( ! is_null($this->size_limit)) {
            $result['options']['sizeLimit'] = $this->size_limit;
        }
        if ( ! is_null($this->show_input)) {
            $result['options']['showInput'] = $this->show_input;
        }
        if ( ! is_null($this->show_dropzone)) {
            $result['options']['showDropzone'] = $this->show_dropzone;
        }
        if ( ! is_null($this->extra_fields)) {
            $result['options']['extraFields'] = $this->extra_fields;
        }
        if ( ! is_null($this->autostart)) {
            $result['options']['autostart'] = $this->autostart;
        }
        if ( ! is_null($this->file_template)) {
            $result['options']['templateFile'] = $this->file_template;
        }
        if ($this->files) {
            $files = [];

            foreach ($this->files as $file) {
                if ($file instanceof FileUpload\File) {
                    $files[] = $file->toArray();
                }
            }

            $result['options']['files'] = $files;
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


    /**
     * Получение максимального размера с которым можно загрузить файл
     * @return int|null
     */
    private function getMaxFileSize():? int {

        $post_size  = $this->getIniSizeToBytes('post_max_size');
        $max_upload = $this->getIniSizeToBytes('upload_max_filesize');

        if (is_null($post_size) && is_null($max_upload)) {
            return null;
        }

        $result = null;

        if ( ! is_null($post_size) && ! is_null($max_upload)) {
            $result = min($post_size, $max_upload);

        } elseif (is_null($post_size) && ! is_null($max_upload)) {
            $result = $max_upload;

        } elseif ( ! is_null($post_size) && is_null($max_upload)) {
            $result = $post_size;
        }

        return $result;
    }


    /**
     * Получение настройки php с размером и конвертирование его в байты
     * @param string $ini_name
     * @return int|null
     */
    private function getIniSizeToBytes(string $ini_name):? int {

        $ini_value = ini_get($ini_name);

        if ($ini_value === false) {
            return null;
        }


        if (is_numeric($ini_value)) {
            $result = (int)$ini_value;

        } else {
            $type   = strtoupper(substr($ini_value, -1));
            $result = substr($ini_value, 0, -1);

            if ( ! is_numeric($result)) {
                return null;
            }

            $result = (int)$result;

            switch ($type) {
                case 'K' : $result *= 1024; break;
                case 'M' : $result *= 1024 * 1024; break;
                case 'G' : $result *= 1024 * 1024 * 1024; break;
            }
        }

        return $result;
    }
}