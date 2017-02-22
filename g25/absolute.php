<?php ## Доступ к глобальному пространству имен
  namespace PHP7;
  function strlen($str)
  {
    return count(str_split($str));
  }

  echo strlen("Hello world!")."<br />";
  echo \strlen("Hello world!")."<br />";
?>  
