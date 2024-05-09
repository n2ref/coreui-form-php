# coreui-form

```php
    use CoreUI\Form;
    
    $form = new Form('id');
    $form->setTitle('Title');
    $form->setLang('en');
    $form->setLangItems([ 'www' => 'eee']);
    $form->setSend('/url/path', 'post', 'form');
    $form->setValidResponseHeaders([ 'Content-Type': ['application/json'] ]);
    $form->setValidResponseType([ 'json' ]);
    
    $form->setWidth(600);
    $form->setWidthMin(600);
    $form->setWidthMax(600);
    $form->setWidthLabel(200);
    $form->setWidthFields(200);
    $form->setControlsOffset(200);
    
    $form->setReadonly(true);
    $form->setValidate(true);
    $form->setSuccessLoadUrl('/url/path');
    $form->setErrorClass('bg-danger');
    $form->setOnSubmit('return func()');
    $form->setOnSubmitSuccess('return func2()');
    
    $form->setLayout(
        '<div class="d-flex flex-wrap">' .
            '<div class="rounded-3 border border-1 shadow-sm p-2 me-3 mb-3" style="width: 315px">' .
                '<h6>Position</h6>' .
                '[position_default]' .
            '</div>' .
        '</div>'
    );
    
    $form->setRecord([
        'text'     => 'default text value',
        'textarea' => "123",
        'date'     => "2023-01-01"
    ]);
    
    $form->addFields([
        (new Form\Field\Text('text', 'Text'))->setWidth(200)
            ->attachFields([
                (new Form\Field\Text('text', 'Text2'))->setRequired(true)
            ]),
        (new Form\Field\TextArea('textarea', 'Text Area'))->setWidth(200)->setDescription("123"),      
        (new Form\Field\Group('Group name', true))
            ->addFields([
                (new Form\Field\Date('date', 'Date'))->setWidth(200)->setAttr("class", "text-danger")
            ])
    ]);
    
    $form->addControls([
        (new Form\Control\Submit('Save'))->setWidth(200)
        (new Form\Control\Link('Link', 'url/path'))
    ]);
   
    
    $form->toArray();
```