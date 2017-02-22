<?php ## Использование функции spl_autoload_register
  spl_autoload_register();
  $page = new PHP7\Page('О нас', 'Содержимое страницы');
  $page->tags();
?>  
