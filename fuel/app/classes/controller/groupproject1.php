<?php

class Controller_GroupProject1 extends Controller_Template
{
	/**
	 * The basic welcome message
	 * This is our controller for Project 1
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
  //$this->template->var = "Hello First Variable use ---!!!";
  //die('This is my Group Project 1 Homepage');
  return Response::forge(View::forge('groupproject1/home'));
  }
  public function action_about()
  {
      die('Hello About Page!');
  }
  public function action_color()
  {
      die('Hello Color Page!');
  }
}
