FROM node:10-alpine
WORKDIR /tmp/googleLogin
COPY package*.json ./
RUN npm install
EXPOSE 8000
CMD ["php", "artisan serve"]