<?php
function loader_class($class){
    require __DIR__.'/class/'.$class.'.php';   
}
spl_autoload_register('loader_class');