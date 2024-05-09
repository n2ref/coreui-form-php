<?php
namespace CoreUI\Form\Field\FileUpload;

/**
 *
 */
class File {

    protected string  $name;
    protected ?string $type         = null;
    protected ?int    $size         = null;
    protected ?string $url_preview  = null;
    protected ?string $url_download = null;


    /**
     * @param string $name
     */
    public function __construct(string $name) {
        $this->setName($name);
    }


    /**
     * Установка имени файла
     * @param string $name
     * @return self
     */
    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }


    /**
     * Получение имени файла
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }


    /**
     * Установка mime типа файла
     * @param string $type
     * @return self
     */
    public function setMimeType(string $type): self {
        $this->type = $type;
        return $this;
    }


    /**
     * Получение mime типа файла
     * @return string
     */
    public function getMimeType(): string {
        return $this->type;
    }


    /**
     * Установка размера файлов
     * @param int|null $bytes
     * @return self
     */
    public function setSize(int $bytes = null): self {
        $this->size = $bytes;
        return $this;
    }


    /**
     * Получение размера файлов
     * @return int|null
     */
    public function getSize():? int {
        return $this->size;
    }


    /**
     * Установка ссылки на картинку для предпросмотра
     * @param string|null $url
     * @return self
     */
    public function setUrlPreview(string $url = null): self {
        $this->url_preview = $url;
        return $this;
    }


    /**
     * Получение ссылки на картинку для предпросмотра
     * @return string|null
     */
    public function getUrlPreview():? string {
        return $this->url_preview;
    }


    /**
     * Установка ссылки для скачивания файла
     * @param string|null $url
     * @return self
     */
    public function setUrlDownload(string $url = null): self {
        $this->url_download = $url;
        return $this;
    }


    /**
     * Получение ссылки для скачивания файла
     * @return string|null
     */
    public function getUrlDownload():? string {
        return $this->url_download;
    }


    /**
     * Преобразование в массив
     * @return array
     */
    public function toArray(): array {

        $result = [
            'name' => $this->name
        ];

        if ( ! is_null($this->size)) {
            $result['size'] = $this->size;
        }
        if ( ! is_null($this->type)) {
            $result['type'] = $this->type;
        }
        if ( ! is_null($this->url_preview)) {
            $result['urlPreview'] = $this->url_preview;
        }
        if ( ! is_null($this->url_download)) {
            $result['urlDownload'] = $this->url_download;
        }

        return $result;
    }
}