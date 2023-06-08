# Define a imagem base
FROM node:latest

# Define o diretório de trabalho no contêiner
WORKDIR /app

# Copia os arquivos do projeto para o contêiner
COPY package.json package-lock.json ./

# Instala as dependências, incluindo as devDependencies
RUN npm install 

# Copia todos os arquivos do projeto para o contêiner
COPY . .

# Expõe a porta do aplicativo (se necessário)
EXPOSE 3000

# Define o comando padrão para executar o aplicativo
CMD ["npm", "run", "dev"]