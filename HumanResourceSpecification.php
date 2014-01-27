<?php
class HumanResource{
	public $date;
	public $weekDay;
	function __construct($date,$weekDay=false){
		$this->date=$date;
		if(false !== $weekDay) {
			$this->weekDay = $weekDay;	
		}
	}
	function salaryIsPaid(){
		if($this->date==25){
			return "You are rich man";	
		}else if($this->date == 23 && $this->weekDay == "Friday") {
			return "22 days left";
		}else if($this->date == 24 && $this->weekDay == "Friday") {
		    return "23 days left";
        }else if($this->date == 24) {
            return "Tomorrow dude";
        }else if($this->date == 26) {
            return "You are pool now";
        }else if($this->date == 27) {
            return "You got it 2 day ago";
        }else if($this->date == 28) {
            return "You got it 3 day ago";
		}else if($this->date == 29) {
		    return "You got it 4 day ago";
		}else if($this->date == 30) {
		    return "You got it 5 day ago";
		}
	}
}

class HumanResourceSpecification extends PHPUnit_Framework_TestCase {
	function testTodayIsPayDay(){
		$expected = "You are rich man";
		$date=25;
		$humanResource = new HumanResource($date);
		$actual = $humanResource->salaryIsPaid();
		$this->assertEquals($expected, $actual);
	}
	
	function testTomorrowIsPayDay(){
		$expected = "Tomorrow dude";
		$date=24;
		$humanResource = new HumanResource($date);
		$actual = $humanResource->salaryIsPaid();
		$this->assertEquals($expected, $actual);
	}
	
	function test23isFriday(){
		$expected = "22 days left";
		$date=23;
		$weekDay = "Friday";
		$humanResource = new HumanResource($date, $weekDay);
		$actual = $humanResource->salaryIsPaid();
		$this->assertEquals($expected, $actual);
	}
	
	function test24friday() {
	    $expected = "23 days left";
	    $date=24;
	    $weekDay = "Friday";
	    $humanResource = new HumanResource($date, $weekDay);
	    $actual = $humanResource->salaryIsPaid();
	    $this->assertEquals($expected, $actual);
	}
	
	function test26date(){
	    $expected = "You are pool now";
	    $todate=26;
	    $humanResource = new HumanResource($todate);
	    $actual = $humanResource->salaryIsPaid();
	    $this->assertEquals($expected, $actual);
	}
	
	function test27date(){
	    $expected = "You got it 2 day ago";
	    $todate=27;
	    $humanResource = new HumanResource($todate);
	    $actual = $humanResource->salaryIsPaid();
	    $this->assertEquals($expected, $actual);
	}
	
	function test28date(){
	    $expected = "You got it 3 day ago";
	    $todate=28;
	    $humanResource = new HumanResource($todate);
	    $actual = $humanResource->salaryIsPaid();
	    $this->assertEquals($expected, $actual);
	}
	
	function test29date(){
	    $expected = "You got it 4 day ago";
	    $todate=29;
	    $humanResource = new HumanResource($todate);
	    $actual = $humanResource->salaryIsPaid();
	    $this->assertEquals($expected, $actual);
	}
	
	function test30date(){
	    $expected = "You got it 5 day ago";
	    $todate=30;
	    $humanResource = new HumanResource($todate);
	    $actual = $humanResource->salaryIsPaid();
	    $this->assertEquals($expected, $actual);
	}
		
}