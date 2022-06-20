<?PHP
  class Complex
  {
    private $real;
    private $imaginary;

    function Complex( $real, $imaginary )
    {
      $this->real = $real;
      $this->imaginary = $imaginary;
    }

    function printComplex()
    {
      if ( $this->imaginary > 0 )
        return $this->real."+".$this->imaginary."i";
      else if( $this->imaginary == 0 )
        return $this->real;
      else
        return $this->real.$this->imaginary."i";
    }
  }
?>
