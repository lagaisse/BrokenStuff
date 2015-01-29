<?php
class MY_Form_validation extends CI_Form_validation
{
  function __construct($config = array())
  {
    parent::__construct($config);
    parent::set_message('numeric_positive', 'The %s field must contain a decimal greater or equal than 0.');
  }

  function error_array()
  {
    if (count($this->_error_array) === 0)
      return FALSE;
    else
      return $this->_error_array;
  }

  // --------------------------------------------------------------------

  /**
   * Numeric positive
   *
   * @access  public
   * @param string
   * @return  bool
   */
  public function numeric_positive($str)
  {
    return (bool)preg_match( '/^[0-9]*\.?[0-9]+$/', $str);

  }


}