<?php



function translateCases($cases){

    foreach($cases as $key => $case){
        echo "Case #".($key+1). ": ".translate($case)."\n";
    }

}


function translate($text){

    $words = explode(" ", $text);

    foreach($words as $key => $value){
        $newWord = GooglereseToEnglish($value);
        $words[$key]=  $newWord;
    }

    $text = implode(" ", $words);

    return $text;
}


function GooglereseToEnglish($word){

    $replace = array(
        "a" => "y",
        "b" => "n",
        "c" => "f",
        "d" => "i",
        "e" => "c",
        "f" => "w",
        "g" => "l",
        "h" => "b",
        "i" => "k" ,
        "j" => "u",
        "k" => "o",
        "l" => "m" ,
        "m" => "x",
        "n" => "s",
        "o" => "e",
        "p" => "v",
        "q" => "z",
        "r" => "p",
        "s" => "d",
        "t" => "r",
        "u" => "j",
        "v" => "g",
        "w" => "t",
        "x" => "h",
        "y" => "a",
        "z" => "q",
    );

    $characters = str_split($word);

    foreach($characters as $index => $char){
        foreach($replace as $key => $value){
            if($char == $value){
               $characters[$index] = $key;
            }
        }
    }
    
    $translatedWord = implode($characters);

    return $translatedWord ;

} 