<?php
/**-------COOKIES------- */

/*Eng: Cookies are a mechanism for storig data in the remmote no browser
        and thus tracking or identifying return  users. you can set specific data to be stored in the browser,and
      then retrieve it when the user visits the site again.
 
      Pt:   Os cookies são um mecanismo para armazenamento de dados no navegador remoto
        e, assim, rastrear ou identificar usuários recorrentes. você pode definir dados específicos a serem armazenados no navegador e
      em seguida, recupere-o quando o usuário visitar o site novamente.
*/

//set cookie
//storing name
setcookie('name', 'Brad', time() + 86400 * 30); //(86400)--1day * n--nr of days = n.days: 86400 * 30

if (isset($_COOKIE['name'])){ echo $_COOKIE['name'];}

setcookie('name', '', time() - 86400);

?>