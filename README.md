# Docker laravel oauth
Es un proyecto php el cual tiene configurado Oauth 2 Server. 

## Prerrequisito
- Tener instalado Docker
## Instalacion
1. Clonar el repositorio
2. Ingresar al directorio del proyecto clonado.
3. Generar la imagen docker ejecutando: `docker-compose up --build -d`.
4. Instalar las dependencias(Esto demora un poco) ejecutando: `sh run.sh`. Presionar enter cuando salen algunas preguntas.
5. Copiar desde la cosola el client ID y Client Secret para luego usarlo.

## Endpoints
El proyecto cuenta con los siguientes endpoints

### Generador de token
url: /oauth/token <br>
Método: Post <br>
payload de request:
- grant_type: password
- client_id: <client_id_copiado>
- client_secret: <cliente_secret_copiado>
- username: cristian.quispe@globant.com
- password: nfmc123
- scope: nfmc

### Refresh token
url: /oauth/token <br>
Método: post <br>
payload de request:
- grant_type: refresh_token
- client_id: <client_id_copiado>
- client_secret: <cliente_secret_copiado>
- refresh_token: <refresh_token_del_token_generado>
- scope: nfmc

### Obtener datos del usuario
url: /api/users <br>
Método: get <br>
headers:
- Authorization: 'Bearer <token_generado>'

