<?php
spl_autoload_register(function($class){
    if(strpos($class, 'EMTypograph') !== false) {
        include 'typograph-emt.php';
    }
});

class YellowTypograph {
    const VERSION = "0.8.22";

    public static function applyTypograph($text) {
        $typograph = new EMTypograph();
        $typograph->setup([
            "Text.paragraphs" => "off",
            "Text.breakline" => "off",
            "OptAlign.oa_oquote" => "off",
            "OptAlign.oa_obracket_coma" => "off",
        ]);
        $typograph->set_text($text);
        return $typograph->apply();
    }
}