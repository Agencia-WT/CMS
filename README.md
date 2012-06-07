# CMS v 0.1
---

## Instalando
Crie uma tabela `users` em seu banco de dados com a seguinte estrutura
<pre>
CREATE TABLE users (
id int(11) NOT NULL AUTO_INCREMENT,
username varchar(255) NOT NULL,
password varchar(255) NOT NULL,
name varchar(255) NOT NULL,
role varchar(20) NOT NULL,
created datetime NOT NULL,
modified datetime NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;
</pre>

---

## Como instalar um módulo
Va até o arquivo `app/Config/Bootstrap.php` e acrescente a seguinte linha: ( Cada modulo terá seu nome )
<pre>CakePlugin::load('ModulePosts');</pre>


### Modulos disponíveis
---
##### Modulo notícias
<pre>CakePlugin::load('ModulePosts');</pre>
Tabela necessária

<pre>
CREATE TABLE  `posts` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`title` VARCHAR( 255 ) NOT NULL ,
`content` TEXT NOT NULL ,
`created` DATETIME NOT NULL ,
`modified` DATETIME NOT NULL
) ENGINE = INNODB;
</pre>

---