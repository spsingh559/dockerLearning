FROM node
WORKDIR app
COPY package.json package.json
RUN npm install
RUN npm install nodemon -g
RUN mv /app/node_modules /node_modules
EXPOSE 80
COPY . .
CMD ["nodemon", "server.js"]