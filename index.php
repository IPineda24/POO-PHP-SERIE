<?php 
//declare(strict_types = 1);

	class Serie {
        public $name;
        public $Directo;
        public $year;
        public $Language;
        public $Genre = "Anime";


     

		function setName($name){
			$this->name = $name;
         
        }

        function setDirec( $Directo){
            $this->Directo= $Directo;
         
        }

        function setYear($year){
			
            $this->year=$year;
         
        }

        function setLan($Language){
			
            $this->Language=$Language;
         
        }

        function setGen($Genre){
		  
            $this->Genre=$Genre;
         
        }

        //LA PARTE DE LOS GET
    
		function getName(){
			return $this->name;
           
        }
        
        function getDirec(){
			return $this->Directo;
           
        }
        
        function getYear(){
			return $this->year;
           
        }
        
        function getLan(){
			return $this->Language;
           
        }
        
        function getGen(){
			return $this->Genre;
           
		}
	}




 	class Extra extends Serie{
       
        public $cap;
        public $Soundtrack;
        public $Subtitles;


        function setCap($cap){
			
            $this->cap=$cap;
         
        }

        function setSound($Soundtrack){
			
            $this->Soundtrack=$Soundtrack;
         
        }

        function setSub($Subtitles){
		  
            $this->Subtitles=$Subtitles;
         
        }

        //LA PARTE DE LOS GET
    
		function getCap(){
			return $this->cap;
           
        }
        
        function getSound(){
			return $this->Soundtrack;
           
        }
        
        function getSub(){
			return $this->Subtitles;
           
        }
     }
     

     
 $Serie = new Serie();




 $name="Swort Art Online";
 $Serie-> setName($name);
  echo $Serie->getName();

 
 echo "<br>";
 $year="2017";
 $Serie-> setYear($year);
 echo $Serie->getYear();
 
 
 echo "<br>";
 $Language="Japones";
 $Serie-> setLan($Language);
 echo $Serie->getLan();
 
 
 echo "<br>";

 
 $Directo="Reki Kawahara";

 $Serie-> setDirec($Directo);
 echo $Serie->getDirec();
 echo "<br>";


 $Genre="Acción,videojuegos,aventura,ciencia ficción, drama, fantasía, romance";
 $Serie->setGen($Genre);
  echo $Serie->getGen();

  echo "<br>";
  
 echo "<br>";
 var_dump($Serie);


 echo "<br>";


 echo "<br>";








 $Extra = new Extra();
 
 $cap="24";
 $Extra->setCap($cap);
 echo $Extra->getCap();
 
 echo "<br>";

 $Soundtrack="Yūki Kajiura";
 $Extra->setSound($Soundtrack);
 echo $Extra->getSound();
 
 echo "<br>";

 $Subtitles="spanish,english,japaneese";
 $Extra->setSub($Subtitles);
 echo $Extra->getSub();
 
 echo "<br>";

 echo "<br>";
 var_dump($Extra);
 ?>