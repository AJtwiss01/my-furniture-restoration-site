<?php 
class Cms5fb6dde37fc6f047496603_1d186396082fb40c7f9aaba35865b362Class extends Cms\Classes\PartialCode
{
public function onStart()
{
    $this['year'] = date('Y'); 

    //somehow {{ "now"|date('Y') }} is not working as expected
}
}
