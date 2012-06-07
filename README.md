# CMS v 0.1
---

### Como instalar um módulo
Va até o arquivo `app/Config/Bootstrap.php` e acrescente a seguinte linha: ( Cada modulo terá seu nome )
<pre>CakePlugin::load('ModulePosts');</pre>


### Modulos disponíveis
---
##### Modulo notícias
<pre>CakePlugin::load('ModulePosts');</pre>
Tabela necessária

<pre>
CREATE TABLE  `cakestrap`.`posts` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`title` VARCHAR( 255 ) NOT NULL ,
`content` TEXT NOT NULL ,
`created` DATETIME NOT NULL ,
`modified` DATETIME NOT NULL
) ENGINE = INNODB;
</pre>

---