## Lavavel API
	
	Abra o arquivo .env, no campo de nome do banco de dados mysql,
	informe o nome do banco de dados a qual será armazenado os dados,
	por padrão do projeto esta configurado com o nome de 'challenge_api',
	
		DB_CONNECTION=mysql
		DB_HOST=127.0.0.1
		DB_PORT=3306
		DB_DATABASE=challenge_api
		DB_USERNAME=root
		DB_PASSWORD=senhaMysql


	obs:todo passo a passo a segui, será resalizado dentro do diretório challenge_api, que se encontra dentro do diretório GESTEC 
	depois de configurar a .env, iras realizar a instalação dos pacotes do composer e do npm.
	Usando o terminal detro do diretório citado, digite os comando a seguir:
		
		- composer install
		- npm install

	em seguida será realizado a migração do banco de dados juntamente com o 
	carregamente dos dados par ao banco de dados.

		- php artisan migrate 
		- php artisan db:seed

	em seguida confira as rotas disponíveis da api.

		- php artisan route:list

		+--------+----------+-----------------------+---------------+--------------------------------------------------+------------+
		| Domain | Method   | URI                   | Name          | Action                                           | Middleware |
		+--------+----------+-----------------------+---------------+--------------------------------------------------+------------+
		|        | GET|HEAD | /                     |               | Closure                                          | web        |
		|        | GET|HEAD | api/patient           | patient.index | App\Http\Controllers\API\PatientController@index | api        |
		|        | GET|HEAD | api/patient/{patient} | patient.show  | App\Http\Controllers\API\PatientController@show  | api        |
		|        | GET|HEAD | api/user              |               | Closure                                          | api        |
		|        |          |                       |               |                                                  | auth:api   |
		+--------+----------+-----------------------+---------------+--------------------------------------------------+------------+ 

	em seguida, execulte o serviço da api com o comando a seguir:
		
		- php artisan serve

	nomalmente o seviço retorna um endereço http no localhot na porta 8000, como vemos a seguir:

		- Starting Laravel development server: http://127.0.0.1:8000
	
	acessando api pela web, basta acessar o endereço da api desejada. como mostra no exemplo abaixo:

		Exibi todos na lista json
		- http://127.0.0.1:8000/api/patient/

		Exibi apenas o conteúdo número indicado. 
		- http://127.0.0.1:8000/api/patient/1

## React JS

	Acessa o diretório challengeview para realizar o acesso as informações da API, a mesma se encontra dentro da pasta GESTEC.
	ao abri o terminal no diretório, vamos execultar alguns comando a seguir:
	
	para instalar os pacote necessario ter node instalado no computador; Juntamente com um gerenciador de pacote.

		- yarn install
		- npm install

	após instalar, no mesmo terminal execulta o comando para ativar o servidor local no react.

		- yarn start
		- npm run start

	
## Desenvolvimento

	Projeto desenvolvido em detalhes foi Uma api com laravel. 

		- Controller API: PatientController
		- Resource: PatientResource
		- Model: Patient
		- Migration Table: list_patients
		- Seeders: PatientSeeder
		- Rota api: Patient



	Projto desenvolvido em view react

		- Componetes
			
			- ListPatient
			- ViewPatient
			- Jumbotron
			- LoadingAPI
	
## Comentario
	
