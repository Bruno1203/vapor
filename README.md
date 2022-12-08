# O Vapor
Plataforma de jogos Inspirada na plataforma de jogos Steam para visualização de jogos e suas informações.

# Motivação
O Vapor foi desenvolvido com objetivo de aprimorar meus conhecimentos nas tecnologias HTML5, CSS3, JAVASCRIPT, PHP Procedural e MySQL. Utilizando essas tecnologias em conjunto para então criar uma plataforma de jogos eficiente - Projeto desenvolvido durante o curso de desenvolvimento WEB - SENAC

# Tecnologias
- HTML5
- CSS3
- JAVASCRIPT
- PHP
- MySQL

# Preparando o Ambiente

Antes de colocar o Vapor para funcionar será necessário preparar o ambiente para que o projeto funcione, para isso será necessário ter:

 1. Servidor WEB
 2. Servidor MySQL
 
Durante o desenvolvimento do Projeto foi utilizado o XAMPP um pacote de servidores de código aberto, incluindo o Servidor WEB Apache e o Servidor de banco de dados MySQL.

# Instalando o Vapor

O processo de instalação terá como base o XAMPP, vale lembrar que o servidor WEB pode ser o de sua preferência, já o Servidor de Banco de Dados tem que ser especificamente o MySQL.

 1. ## Subindo os Servidores
    Primeiramente precisamos iniciar o XAMPP e iniciar os módulos Apache e MySQL.
    
 2. ## Posicionando os Arquivos para que o projeto funcione com perfeição. 
	 Após subirmos o servidor, podemos começar a colocar os arquivos nos seus respectivos lugares    
     1. Faça download do projeto.
     2. Copie a pasta do projeto para dentro do diretório: C:\xampp\htdocs\
    
 3. ## Subindo o Banco de Dados
	 Após termos colocados os arquivos no diretório correto, precisamos subir o banco de dados do projeto, para isso é necessário dentro do painel do XAMPP clicamos em admin no modulo MySQL, após isso estaremos na pagina de administração do MySQL, o usuário padrão do painel é root e não contem senha, caso crie um usuário especifico dentro do servidor MySQL será necessário reconfigurar as informações do banco de dados referentes a usuário e senha dentro do arquivo conexao.php localizado em nos seguintes diretórios vapor/modulos/ e vapor/painel/modulos
	Acessando o servidor será necessário criar um banco de dados chamado vapor e importar o arquivo vapor.sql dentro da pasta do projeto, localizado em C:/xampp/htdocs/vapor/

 4. ## Acessando o Vapor
	Após realizar os processos anteriores podemos finalmente acessar o projeto em seu navegador através de localhost/vapor/

# Em breve
Em breve implementação de funcionalidade preview de mensagens

# Autor
Bruno Henrique Carrara de Almeida
## Contato
E-mail: brunohenrique122003@gmail.com
LinkedIn: https://www.linkedin.com/in/bruno-carrara-5628a41a2/
