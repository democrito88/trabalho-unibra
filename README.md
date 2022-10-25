# Back-end do gerenciador de treinos

Gerenciador de treinos de basquete<br>
Trabalho de graduação em Análise e Desenvolvimentos de Sistemas<br>
Unibra<br>
Recife - PE - Brasil

### Autores
 - Marco Davi B. de Melo

### Características
 - <img align="center" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg"><a href='https://www.php.net/releases/8.1/en.php'>PHP 8.1</a>
 - <a href='https://www.doctrine-project.org/projects/orm.html'>Doctrine ORM 2.6</a>
 - <i class="devicon-html5-plain colored"></i>HTML 5
 - <a href='https://getbootstrap.com'>Bootstrap 5.2</a>
 - <i class="devicon-sqlalchemy-plain"></i>SQLite 
### Como usar
Clone o projeto<br>
No terminal, mude para o diretório raiz do projeto<br>
Execute os seguintes comandos: 
<ul style='list-style-type: none'>
    <li>gere a pasta vendor: <code>composer install</code></li>
    <li>atualize o autoload.php: <code>composer dump-autoload</code></li>
    <li>gere a pasta node_modules: <code>npm i</code></li>
    <li>gere o repositório local db.sqlite: <code>vendor/bin/doctrine orm:schema-tool update</code></li>
    <li>em desenvolvimento simule o servidor com: <code>php -S localhost:8080 -t public</code></li>
</ul>