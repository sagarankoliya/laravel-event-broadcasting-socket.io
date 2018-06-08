<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Laravel Events Broadcasting with Redis and Laravel Echo

Here I have showing you that how to work with broadcast your events over a WebSocket connection.

- **[Using Laravel Event Broadcasting](https://laravel.com/docs/5.4/broadcasting)**
- **You can use this thing laravel 5.4 and greater version.**

---

##### System Requirements

The following are required to function properly.

- **Node 6.0+**
- **Redis 3+**
- **laravel-echo-server**  [laravel-echo-server
](https://github.com/tlaverdure/laravel-echo-server)

##### Getting Started

**_Step : 1_**

```
git clone https://github.com/sagarankoliya/laravel-event-broadcasting-socket.io.git

```

**_Step : 2_**

Go to project directory using **Terminal / CMD**

```
composer install

```

**_Step : 3_**

In project directory find **_.env.example_** and rename to **_.env_**

Generate laravel application key

```
php artisan key:generate

```

Also change in .env

```
BROADCAST_DRIVER=redis

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

```

**_Step : 4_**

install Node dependencies

```
npm install

```

**_Step : 5_**

Run Project

```
php artisan serve

```
**_Step : 6_**

Open project directory in second **Terminal / CMD**

```
laravel-echo-server start

```

Open http://127.0.0.1:8000 url in multipal brower

than after click **_Call Event_** button from any of browser screen, alert will show on all browsers, that is your response.

##### One client broadcasting an event and all connected client Subscribe an event.

### Thats it.

Feel free to contact me if you have any query. (^_^)
