<?php ## Функция preg_replace_callback_array()
  $str = '<html><body>Hello world!</body><html>';
  $str = preg_replace_callback_array(
    [
      '{(?<btag></?)(?<content>\w+)(?<etag>.*?>)}s' => function($m) {
        return $m['btag'].strtoupper($m['content']).$m['etag'];
      },
      '{(?<=>)([^<>]+?)(?=<)}s' => function ($m) { return "<strong>$m[1]</strong>"; }
    ],
    $str);

  echo htmlspecialchars($str);
?>    
