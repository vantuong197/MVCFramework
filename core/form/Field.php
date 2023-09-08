<?php

namespace app\core\form;
use app\core\Model;

class Field{
    public string $type;
    private const TYPE_TEXT = 'text';
    private const TYPE_PASSWORD = 'password';
    public Model $model;
    public string $attribute;
    public string $fieldLaybel;

    public function __construct(Model $model, $attribute, $fieldLaybel)
    {   
        $this->fieldLaybel = $fieldLaybel;
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('
            <div class="mb-3 has-validation">
                <label>%s</label>
                <input type="%s" name="%s" value="%s" class="form-control%s">
                <div style="display:block" class="invalid-feedback">
                    %s
                </div>
            </div>
        ',  
            $this->fieldLaybel,
            $this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? ' is_invalid' : '',
            $this->model->getFirstError($this->attribute)
        );
    }

    public function passwordFiled(){
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

}