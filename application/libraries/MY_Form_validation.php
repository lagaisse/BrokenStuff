<?php
class MY_Form_validation extends CI_Form_validation
{
  function __construct($config = array())
  {
    parent::__construct($config);
    parent::set_message('numeric_positive', 'The %s field must contain a decimal greater or equal than 0.');
    parent::set_message('image_base64', 'The %s field must be a image in base64 format.');
    parent::set_message('valid_base64', 'The %s field must be base64 data.');
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

  // --------------------------------------------------------------------

  /**
   * Image base 64 
   *
   * @access  public
   * @param string
   * @return  bool
   */
  public function image_base64($str)
  {
    return (bool)preg_match( '#^data:image/([^;]+);base64,(.+)$#', $str);
  }

    // --------------------------------------------------------------------

  /**
   * Image data base 64 
   *
   * @access  public
   * @param string
   * @return string
   */
  public function image_data_base64($str='')
  {
    if (preg_match('#^data:image/([^;]+);base64,(.+)$#', $str, $matches, PREG_OFFSET_CAPTURE) != 1)
    {
      return '';
    }
    return $matches[2][0];
  }





}
