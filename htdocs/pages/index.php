<?php
if ($pageComponents) {
    foreach ($pageComponents as $component) {
        include 'htdocs/components/'.$component.'/lang/'.$component.'.'.$lang.'.php';
        include 'htdocs/components/'.$component.'/'.$component.'.php';
    }
} else if ($pageContent) {
    foreach ($pageContent as $content) {
        include 'htdocs/pages/project/'.$content.'/lang/'.$content.'.'.$lang.'.php';
        include 'htdocs/pages/project/'.$content.'/'.$content.'.php';
    }
}
?>