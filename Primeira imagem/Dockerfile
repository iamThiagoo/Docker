### Escolhe a imagem base
FROM node

### Criar a pasta do projeto
WORKDIR /app

### Copia os arquivos json para pasta
COPY package*.json /app

### instala as dependências do projeto, nesse caso o Express
RUN npm install

### Copia oos arquivos restantes
COPY . .

### Expoe uma porta do container
EXPOSE 3000

### Roda o comando para a executação da aplicação
CMD ["node", "app.js"]