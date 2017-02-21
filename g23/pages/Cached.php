<?php ## Базовый класс для кешируемых страниц
  require_once "Page.php";
  class Cached extends Page
  {
    protected $expires;
    protected $store;
    public function __construct($title = '', $content = '', $expires = 0)
    {
      parent::__construct($title, $content);
      $this->expires = $expires;
      //$this->store = new Memcached();
      //$this->store->addServer('localhost', 11211);
      $this->set($this->id('title'), $title);
      $this->set($this->id('content'), $content);
    }
    protected function isCached($key)
    {
      //return (bool) $this->store->get($key);
    }
    protected function set($key, $value, $forse = false)
    {
      //if ($forse) {
      //  $this->store->set($key, $value, $this->expires);
      //} else {
      //  if($this->isCached($key)) {
      //    $this->store->set($key, $value, $this->expires);
      //  }
      //}
    }
    protected function get($key)
    {
      //return $this->store->get($key);
    }
    public function id($name)
    {
      die("Что здесь делать? Неизвестно!");
    }
    public final function title()
    {
      //if ($this->IsCached($this->id('title'))) {
      //  return $this->get($this->id('title'));
      //} else {
          return parent::title();
      //}
    }
    public final function content()
    {
      //if ($this->isCached($this->id('content'))) {
      //  return $this->get($this->id('content'));
      //} else {
          return parent::content();
      //}
    }
  }
?>
