<?php ## Класс Page
  namespace PHP7;
  use \PHP7\Seo as Seo;
  use \PHP7\Tag as Tag;

  class Page
  {
    use Seo, Tag;
    protected $title;
    protected $content;
    Public function __construct($title = '', $content = '')
    {
      $this->title = $title;
      $this->content = $content;
    }
  }
?>  
