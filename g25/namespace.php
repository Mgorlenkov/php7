<?php ## Объявление пространства имен
  namespace PHP7;

  function debug($obj)
  {
    echo "<pre>";
    print_r($obj);
    echo "</pre>";
  }

  class Page
  {
    protected $title;
    protected $content;
    public function __construct($title = '', $content = '')
    {
      $this->title = $title;
      $this->content = $content;
    }
  }
?>  
