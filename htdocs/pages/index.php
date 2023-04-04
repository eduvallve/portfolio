<?php
if ($pageComponents) {
    foreach ($pageComponents as $component) {
        include "htdocs/components/".$component."/lang/".$component.".".$lang.".php";
        include 'htdocs/components/'.$component.'/'.$component.'.php';
    }
}
?>