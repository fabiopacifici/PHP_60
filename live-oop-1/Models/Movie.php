<?php


/**
 * Movie Class
 * @author Fabio Pacifici
 * @copyright 2022 Fabio Pacifici
 */
class Movie
{

  public $title;
  public $poster;
  public $length;
  public $desc;



  /** 
   * Movie Constructor
   * @param title The movie title
   * @param poster The movie poster
   * @param length The movie length
   * @param desc The movie desc
   * 
   */
  public function __construct(String $title, String $poster, Int $length, String $desc)
  {
    $this->title = $title;
    $this->poster = $poster;
    $this->length = $length;
    $this->desc = $desc;
  }


  public function getLength()
  {
    return "$this->title: $this->length minutes";
  }
}
