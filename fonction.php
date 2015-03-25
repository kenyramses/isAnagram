
<?php

function isAnagram($mot1, $mot2){
$bool1 = false;

	$tabmot1 = array();
	$tabmot2 = array();

	$size_mot1 =strlen($mot1);
	$size_mot2 =strlen($mot2);

	//fonction remplacement des caracteres spéciaux
    function removeSpecCar ($text) {
        $alphabet = array(
            'Š'=>'S', 'š'=>'s', 'Ð'=>'Dj','Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A',
            'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I',
            'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U',
            'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss','à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a',
            'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i',
            'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u',
            'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'ƒ'=>'f',
        );
 
        $text = strtr ($text, $alphabet);
 
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '', $text);
 
        return $text;
    }
    $string2 = removeSpecCar($mot2);
    echo  $string2; echo " taille  "; echo strlen($string2); echo " et ";

	$string1 = removeSpecCar($mot2);
	echo $string1; echo " taille  ";echo strlen($string1); echo ";  ";
 
  //on verifie d'abord si les 2 mots ont la meme longeur
	if (strlen($string1)  !=  strlen($string2) ) {
		//echo strlen($mot1);
		//echo strlen($string2);
		return "mots de tailes differente pas anagramme";
	}else{
		//on conertis en tableau les chaine avec la fonction str_spilt
		$tabmot1 = str_split($string1);
		echo count($tabmot1);
		echo " et ";
		//on recupere le contenu de String2 dans un tableaa
		$tabmot2 = str_split($string2);
		echo count( $tabmot2);
		//var_dump($tabmot1);


		//meme taille alors on verifie pr chaq caractere l nombre d'occcurence du caractere dans mot1

        // on parcour avec foreach les occurances des tableaux 
        foreach ($tabmot1 as $value) {
        	//echo $value;
         foreach ($tabmot2 as $val2){
        	//compare
        	
        	//echo $val2;

        	if (substr_count($string1, $value) != substr_count($string2, $val2) ){
        		//echo "here";
        		//return "not okk";
        		 $bool1 = false;
        	
            } else
            $bool1 =true;;
       	
         }
        
        }

  
	}
        return $bool1; 
}

//echo isAnagram('Albert Einstein','Rien n’est établi');
echo isAnagram('ramesses',"rame's ses");