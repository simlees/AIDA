<?php

class Vehichle {
  private $id;
  private $wheels;
  private $colour;
  private $maxSpeed;
  
  public function __construct($id, $wheels, $colour, $maxSpeed) {
       $this->id = $id;
       $this->wheels = $wheels;
       $this->colour = $colour;
       $this->maxSpeed = $maxSpeed;
  }
    
     		 
 public function getID(){
     return $this->id;
 }
 
 public function setID($id){
     $this->id = $id;
 }
 
 
 
 public function getWheels(){
     return $this->wheels;
 }
 
 public function setWheels($wheels){
     $this->wheels = $wheels;
 }
 
 
 
  public function getColour(){
     return (string)$this->colour;
 }
 
 public function setColour($colour){
     $this->colour = $colour;
 }
 
 
 
  public function getMaxSpeed(){
     return $this->maxSpeed;
 }
 
 public function setMaxSpeed($maxSpeed){
     $this->maxSpeed = $maxSpeed;
 }
 
}
