<?php
class Helpers {
    public static function add($name,$text,$help=Null)
    {
        if(isset($help))
        {
            $msj = '<div class="form-group"><label for="'.$name.'">'.$text.'</label> <small style="padding-left: 5px;">'.$help.'</small><input type="text" class="form-control" id="'.$name.'" name="'.$name.'" placeholder="'.$text.'"></div>';
        }
        else
        $msj = '<div class="form-group"><label for="'.$name.'">'.$text.'</label><input type="text" class="form-control" id="'.$name.'" name="'.$name.'" placeholder="'.$text.'"></div>';
        return $msj;
    }
}