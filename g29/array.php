<?php ## Использование виртуальных массивов
  class InsensitiveArray implements ArrayAccess
  {
    private $a = [];
    public function offsetExists($offset)
    {
      $offset = strtolower($offset);
      $this->log("offsetExists('$offset')");
      return isset($this->a[$offset]);
    }
    public function offsetGet($offset)
    {
      $offset = strtolower($offset);
      $this->log("offsetGet('$offset')");
      return $this->a[$offset];

    }
    public function offsetSet($offset, $data)
    {
      $offset = strtolower($offset);
      $this->log("offsetSet('$offset', '$data')");
      $this->a[$offset] = $data;
    }
    public function offsetUnset($offset)
    {
      $offset = strtolower($offset);
      $this->log("offsetUnset('$offset')");
      unset($this->array[$offset]);
    }
    public function log($str)
    {
      echo "$str<br>";
    }
  }

  $a = new InsensitiveArray();
  $a->log("## Устанавливаем значения (оператор =).");
  $a['php'] = 'There is more than one way to do it.';
  $a['PhP'] = 'Это значение должно переписаться поверх предыдущего.';
  $a->log("## Получаем значение элемента (оператор []).");
  $a->log("<b>значение:</b> '{$a['php']}'");
  $a->log("## Проверяем существование элемента (оператор isset())");
  $a->log("<b>exists</b> ".(isset($a['php'])? "true" : "false"));
  $a->log("## Уничтожаем элемент (оператор unset())");
  unset($a['php']);
?>
