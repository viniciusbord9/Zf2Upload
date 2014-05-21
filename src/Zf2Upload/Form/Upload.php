<?php

namespace Zf2Upload\Form;

use Zend\Form\Element;
use Zend\Form\Form;

class Upload extends Form
{

    public function __construct($name = null, $options = array()) {
        parent::__construct('upload', $options);
        $this->setAttribute('method', 'post')
             ->setAttribute('class', 'form-signin')
             ->setAttribute('id', 'fileupload')
             ->setAttribute('enctype','multipart/form-data');

        $file = new Element\File('files');
        $file->setLabel('Images Upload')
             ->setAttribute('id', 'image-file')
             ->setAttribute('multiple', true);
        $this->add($file); 
    }
}
