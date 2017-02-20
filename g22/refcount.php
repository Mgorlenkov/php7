<?php ## Проблемы алгоритма со счетчиком ссылок
  class Father
    {
      public $children = [];
      function __destruct() { echo "Father умер.<br />";}
    }
  class Child
    {
      public $father;
      function __construct(Father $father) {$this->father = $father;}
      function __destruct() {echo "Child умер. <br />";}
    }
  $father = new Father;
  $child = new Child($father);
  $father->children[] = $child;
  echo "Пока что все живы... Убиваем всех.<br />";
  $father = $child = null;
  echo "Все умерли, конец программы.<br />";
?>
