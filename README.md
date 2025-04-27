
# Laravel Project Setup Instructions Stock Api Laravel Backend

1. **Clone the Project from GitHub**:
```bash
git clone [your-repository-url]
cd [project-directory]
```

3. **Set Up Environment**:
```bash
cp .env.example .env
```

4. **Set Up Database**:
```bash
php artisan migrate
```

5. **Run the Project**:
```bash
php artisan serve
```

6. **Open the Application**:
Visit `http://127.0.0.1:8000` in your browser.


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).






# API Documentation

## Register User
**POST** http://127.0.0.1:8000/api/register
```json
{
    "name": "John",
    "email": "john@example.com",
    "password": "pass123"
}
```

## Login User
**POST** http://127.0.0.1:8000/api/login
```json
{
    "email": "john@example.com",
    "password": "pass123"
}
```
**Response**:
```json
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMDgzMTg0YTQwNDgwMDdlYmFkMzRlYWI4NjBjMzIzOTUwYThjZmRlOGE3YzA1M2FlOGIzN2Q2NWU2OTEzMmYzMzA3NTViYzYwYzI0MWY0MzciLCJpYXQiOjE3NDU3NTk0NjguODc0OTQ3LCJuYmYiOjE3NDU3NTk0NjguODc1MDEyLCJleHAiOjE3NjE1NzA2NjguODUwMzM1LCJzdWIiOiI1Iiwic2NvcGVzIjpbXX0.3u6mSgYVkvQcxtug2An9E3lpYJYzFWDFUR9wQ59HKyA2hyPgxRMdCS_FszxZmRHfLsMfIR4HZRGrdzvRYzsAONhdHwo7j8LS-F2IZaMfFt_Gl3M9xOwH5ON9sX82AzC3S996nfXwshN2XYqEnT65SGqpnR4wWPA-mogL0SnucTqzk-yM2-vWiSmUQj_2VMfRPN1EBQ-OMnUNX9PGeQXXekUJjllIS7-iqNXRE-Xx1ZQSMXCQkv30Nlwoc_YJeW5o5AhHgrfLfSzC9ypqQMl_UkU9-w82ucejblDfY158ljoyrYXm7yAd-bwkcgDjnel9M8qLnu1s2759xrXn3trHd-vJ3hLXg-RHkWzVrzh3G93ZhVLv4AoSn5LrdtryIhE2LXEYLiFcswdwbYcTfZK3vxVHRdcTPyOGlJ16E1_MpWxXj0uHzlqlutPqIiaLsqKTJ3BPKlBpCXGaOs0zPy5jF6eRKBFKuWY4TxE1ZGKgzcU57rBMfldBu1ACEYm8JCOz0DMIOEE1-vAC6FQ712vtm_tNcdWNSSvzTOVH5haQYkwGx8meMHIAxUveOAdiHsXBZ_MshrsIMeiTcJKauVtVEMpq6qmwqmOkLlbsKgeyRiS1e36qsk-NGC2CRJx2Ph5gANPv9yMK-mL17VygM_f53HHXcNIYw7nNHd2lu8k2WQY"
}
```

## Get User Information
**GET** http://127.0.0.1:8000/api/user
**Authorization**: Bearer [Token]
**Response**:
```json
{
    "id": 5,
    "name": "John",
    "email": "john@example.com",
    "email_verified_at": null,
    "created_at": "2025-04-27T13:01:53.000000Z",
    "updated_at": "2025-04-27T13:01:53.000000Z"
}
```

## Create Store
**POST** http://127.0.0.1:8000/api/stores
```json
{
    "name": "test1"
}
```

**Response**:
```json
{
    "message": "Store created successfully",
    "store": {
        "name": "test1",
        "updated_at": "2025-04-27T13:59:54.000000Z",
        "created_at": "2025-04-27T13:59:54.000000Z",
        "id": 1
    }
}
```

## Get All Stores
**GET** http://127.0.0.1:8000/api/stores
**Response**:
```json
[
    {
        "id": 1,
        "name": "test1",
        "created_at": "2025-04-27T13:59:54.000000Z",
        "updated_at": "2025-04-27T13:59:54.000000Z"
    },
    {
        "id": 2,
        "name": "test2",
        "created_at": "2025-04-27T14:01:57.000000Z",
        "updated_at": "2025-04-27T14:01:57.000000Z"
    }
]
```

## Get Store by ID
**GET** http://127.0.0.1:8000/api/stores/1
**Response**:
```json
{
    "id": 1,
    "name": "test1",
    "created_at": "2025-04-27T13:59:54.000000Z",
    "updated_at": "2025-04-27T13:59:54.000000Z",
    "stocks": []
}
```

## Create Stock
**POST** http://127.0.0.1:8000/api/stocks
**Response**:
```json
{
    "message": "Stock entries saved successfully"
}
```

## Get Stocks with Pagination and Sorting
**GET** http://127.0.0.1:8000/api/stocks?size=10&sort=[{"field":"item_name","dir":"asc"}]
**Response**:
```json
{
    "current_page": 1,
    "data": [
        {
            "id": 2,
            "item_code": "item1",
            "item_name": "Item 1",
            "quantity": 10,
            "location": "Location 1",
            "store_id": 1,
            "in_stock_date": "2025-04-27",
            "status": "Pending",
            "created_at": "2025-04-27T14:07:50.000000Z",
            "updated_at": "2025-04-27T14:07:50.000000Z",
            "store": {
                "id": 1,
                "name": "test1",
                "created_at": "2025-04-27T13:59:54.000000Z",
                "updated_at": "2025-04-27T13:59:54.000000Z"
            }
        },
        {
            "id": 3,
            "item_code": "item2",
            "item_name": "Item 2",
            "quantity": 20,
            "location": "Location 2",
            "store_id": 1,
            "in_stock_date": "2025-04-27",
            "status": "Pending",
            "created_at": "2025-04-27T14:07:51.000000Z",
            "updated_at": "2025-04-27T14:07:51.000000Z",
            "store": {
                "id": 1,
                "name": "test1",
                "created_at": "2025-04-27T13:59:54.000000Z",
                "updated_at": "2025-04-27T13:59:54.000000Z"
            }
        }
    ],
    "first_page_url": "http://127.0.0.1:8000/api/stocks?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http://127.0.0.1:8000/api/stocks?page=1",
    "links": [
        {
            "url": null,
            "label": "&laquo; Previous",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/stocks?page=1",
            "label": "1",
            "active": true
        },
        {
            "url": null,
            "label": "Next &raquo;",
            "active": false
        }
    ],
    "next_page_url": null,
    "path": "http://127.0.0.1:8000/api/stocks",
    "per_page": "10",
    "prev_page_url": null,
    "to": 2,
    "total": 2
}
```

