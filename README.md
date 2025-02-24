# Configuração do Projeto
Este documento apresenta os passos necessários para configurar e rodar o projeto corretamente.
## Requisitos
Antes de começar, certifique-se de que possui os seguintes softwares instalados:
- **PHP >= 8.3**
- **Composer** (gerenciador de dependências PHP)
- **Node.js** com o `npm` (gerenciador de pacotes para JavaScript)
- Outras dependências específicas do sistema operacional podem ser necessárias (como ferramentas de compilação).

## Configurando o Projeto
Siga os passos abaixo para configurar o projeto no seu ambiente:
### 1. Clonar o Repositório
Baixe o repositório do projeto utilizando o comando a seguir (ou baixe manualmente):
``` bash
git clone https://github.com/seu-repositorio.git
cd seu-repositorio
```
### 2. Instalar Dependências do PHP
O projeto utiliza o Composer para gerenciar dependências do PHP. Para instalar todas as dependências, execute:
``` bash
composer install
```
### 3. Instalar Dependências de Frontend
O projeto utiliza o **Laravel Mix** para compilar arquivos de assets (CSS, JS, etc.). Para que isso funcione, é necessário instalar as dependências do Node.js:
``` bash
npm install
```
### 4. Compilar os Assets
Após instalar as dependências do Node.js, compile os assets necessários:
**Modo de Desenvolvimento**:
``` bash
npm run dev
```
**Modo de Produção** (recomendado para ambientes de produção):
``` bash
npm run prod
```
Esse processo irá gerar o arquivo `mix-manifest.json` na pasta `public/`. Esse arquivo é essencial para o correto funcionamento do projeto, pois mapeia os arquivos compilados.
### 5. Configurar Variáveis de Ambiente
Copie o arquivo de exemplo `.env.example` e renomeie para `.env`:
``` bash
cp .env.example .env
```
Atualize as variáveis do `.env` conforme suas necessidades, como conexão com banco de dados, URL base do projeto, e outras configurações.
### 6. Rodar o Servidor
Após configuração, inicie o servidor local utilizando:
``` bash
php artisan serve
```
Para acessar o projeto, abra no navegador: [http://localhost:8000](http://localhost:8000).
## Gerenciando Erros Comuns
1. **Erro: `mix-manifest.json not found`**
    - Isso acontece quando os assets não foram compilados corretamente. Para corrigir, execute:
``` bash
     npm run dev
```
1. **Erro: Permissão Negada para Escrever no Diretório**
    - Certifique-se de que as permissões de escrita nas pastas `storage` e `bootstrap/cache` estão configuradas:
``` bash
     chmod -R 775 storage bootstrap/cache
```
## Comandos Úteis
- Para instalar pacotes PHP:
``` bash
  composer install
```
- Para instalar pacotes Node.js:
``` bash
  npm install
```
- Para compilar assets:
    - Desenvolvimento:
``` bash
    npm run dev
```
- Produção:
``` bash
    npm run prod
```
- Para iniciar o servidor local:
``` bash
  php artisan serve
```
