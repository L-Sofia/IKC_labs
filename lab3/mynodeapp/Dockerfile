# Базовий образ з Node.js
FROM node:18

# Робоча директорія у контейнері
WORKDIR /app

# Копіюємо файли залежностей
COPY package*.json ./

# Встановлюємо залежності
RUN npm install

# Копіюємо весь проєкт
COPY . .

# Задаємо змінні середовища
ENV PORT=4000
ENV NODE_ENV=production

# Відкриваємо порт 4000
EXPOSE 4000

# Команда запуску
CMD ["npm", "start"]
