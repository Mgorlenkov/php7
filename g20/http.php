<?php ## "Активиация" HTML-ссылок
  $text = 'Ссылка: (http://thematrix.com), www.ru?"a"=b, http://lozhki.net.';
  echo hrefActivate($text);

  function hrefActivate($text)
  {
    return preg_replace_callback(
      '{
        (?:
          (\w+://)
          |
          www\.
        )
        [\w-]+(\.[\w-]+)*
        (?: : \d+)?
        [^<>"\'()\[\]\s]*
        (?:
          (?<! [[:punct:]] )
          |
          (?<= [-/&+*] )
        )
      }xis',
      function ($p) {
        $name = htmlspecialchars($p[0]);
        $href = !empty($p[1]) ? $name : "http://$name";
        return "<a href=\"$href\">$name</a>";
      },
      $text
    );
  }
?>  
