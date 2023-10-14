<?php


    function findAllPermutations($word) {
          
        $characters = str_split($word);

        $words = str_split($word);
       
        for($i=1; $i<strlen($word); $i++) {

            $words = generateWords($words, $characters);
            
        }

        return $words;
    }


    function generateWords(array $words, array $characters): array {

        $generatedWords = array();

        foreach($words as $word) {

            foreach ($characters as $char){

                $arrayNewWord = str_split($word);

                if(!in_array($char, $arrayNewWord)){ 

                    array_push($arrayNewWord, $char);

                    $newWord = implode($arrayNewWord);

                    array_push($generatedWords, $newWord);
                }

            }
                
        }
        
        return $generatedWords;
    }


    /*
    Auxiliary function 
    */

    function calculateNumberOfWords(string $word){

        $word = strtolower($word);

        $characters = str_split($word);

        $numberOfWords = count($characters);

        for($i = $numberOfWords; $i > 1; $i--){
            
            $numberOfWords = $numberOfWords * ($i-1);
        }
        

        return $numberOfWords;

    }
    
?>