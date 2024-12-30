<?php
class Book {
	// Properties
    public $name;
    public $size;
    public $page;

    // Methods
    public function __contructor ($name, $size, $page){
    	$this -> name = $name;
        $this -> size = $size;
        $this -> page = $page;
    }
    public function __destruct(){
    	echo "The favourite book is a {$this -> name}";
    }

    public function getName(){
    	return $this -> name;
    }
    public function getSize(){
    	return $this -> size;
    }
    public function getPage(){
    	return $this -> page;
    }
    public function getDetails(){
    	return 'The' . $name .'of' . 'size' . $size . 'and' . 'page'. $page . 'is of benefit to me';
    }

}

$textBook = new Book ();
$textBook = setName('textBook');
$textBook = setSize('big');
$textBook = setPage('70');

$noteBook = new Book ();
$noteBook = setName('noteBook');
$textBook = setSize('big');
$textBook = setPage('60');

$drawingBook = new Book ();
$drawingBook = setName('drawingBook');
$textBook = setSize('small');
$textBook = setPage('20');

echo $textbook -> getDetails();
echo "<br><br>";
echo $noteBook -> getDetails();
echo "<br><br>";
echo $drawingBook -> getDetails();



?>
