FROM node:18-alpine3.18 as builder

# Definindo o diretório de trabalho da aplicação
WORKDIR /app

# Copiando todos os arquivos do repositório para o diretório de trabalho
COPY . .

# Instalando as dependências
RUN yarn install

# Realizando o build da aplicação
RUN yarn build

FROM nginx:alpine

# Copiando a pasta resultante do build para o diretório do NGINX
COPY --from=builder /app/dist /usr/share/nginx/html

# Expondo a porta 8080 para acesso externo
EXPOSE 8080


# a imagem ta dividida em stages
