Here's a `README.md` file for your Laravel chat room app that uses Inertia, Vue, Pinia, and Laravel Echo (with Reverb) for real-time communication, including a typing indicator.

---

# Laravel Chat Room App

This is a real-time chat application built using Laravel, Inertia.js, Vue 3, and Pinia for state management. It leverages Laravel Echo and [Reverb](https://laravel.com/docs/10.x/reverb) for WebSockets to provide real-time messaging and a typing indicator between users.

## Features

✅ Real-time chat with WebSockets  
✅ Client-to-client typing indicators  
✅ User authentication with Laravel Breeze  
✅ Vue 3 + Inertia.js frontend  
✅ Pinia for state management  
✅ Laravel Echo & Reverb for WebSocket communication  
✅ Persistent chat history  

---

## Installation

### 1. Clone the repository

```sh
git clone https://github.com/yourusername/laravel-chat-room.git
cd laravel-chat-room
```

### 2. Install dependencies

```sh
composer install
npm install
```

### 3. Set up environment variables

Copy `.env.example` to `.env`:

```sh
cp .env.example .env
```

Generate an application key:

```sh
php artisan key:generate
```

### 4. Configure database

Edit your `.env` file and update the database settings:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

Run migrations:

```sh
php artisan migrate
```

### 5. Set up WebSockets (Reverb)

Reverb is used for WebSockets. Install it with:

```sh
php artisan reverb:install
```

Start the WebSocket server:

```sh
php artisan reverb:start
```

### 6. Start development servers

Run Laravel:

```sh
php artisan serve
```

Run Vite for Vue frontend:

```sh
npm run dev
```

---

## Usage

### Sending Messages
Users can send messages in real-time to other connected users.

### Typing Indicator
A real-time typing indicator is displayed when a user starts typing.

---

## License

This project is open-source under the MIT License.