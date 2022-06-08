<?php

class LineComparison{

    public $x1;
    public $x2;
    public $y1;
    public $y2;

    static function welcomeMsg(){
        echo "Welcome to line comparison problem\n";
    }
    //input values
    function readValues(){
        //input values from user
        $this->x1 = readline("Please enter the Co-rdinate x1 : \n");
        $this->x2 = readline("Please enter the Co-rdinate x2 : \n");
        $this->y1 = readline("Please enter the Co-rdinate y1 : \n");
        $this->y2 = readline("Please enter the Co-rdinate y2 : \n");

    }

    //function to calculate length
    function calculateLength(){
        $this->readValues();
        $lengthOfLine = sqrt(pow(($this->x2 - $this->x1),2) + pow(($this->y2 - $this->y1),2));
        echo "The length of the line between points ($this->x2,$this->x1) and ($this->y2, $this->y1) is :".round($lengthOfLine,0);
    }

}
// function calling
$line = new LineComparison();
$line->welcomeMsg();
$line->calculateLength()

?>