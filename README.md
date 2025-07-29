\# E-commerce Checkout System



A full-stack e-commerce checkout system built with Laravel (backend), React (frontend), and MySQL (database) using Laragon.



\## Tools Used

\- \*\*Backend\*\*: Laravel, PHP, MySQL

\- \*\*Frontend\*\*: React, Axios

\- \*\*Environment\*\*: Laragon (Apache/Nginx, MySQL, PHP)

\- \*\*Version Control\*\*: Git, GitHub



\## Setup Instructions

1\. \*\*Install Laragon\*\*:

&nbsp;  - Download and install Laragon from https://laragon.org/download/.

&nbsp;  - Start Laragon and ensure MySQL and Apache/Nginx are running.

2\. \*\*Set Up Database\*\*:

&nbsp;  - Open Laragon Terminal and run:

&nbsp;    ```bash

&nbsp;    mysql -u root -p

&nbsp;    CREATE DATABASE ecommerce;

&nbsp;    ```

3\. \*\*Backend Setup\*\*:

&nbsp;  - Navigate to `C:\\laragon\\www`.

&nbsp;  - Install Laravel:

&nbsp;    ```bash

&nbsp;    composer create-project laravel/laravel backend

&nbsp;    ```

&nbsp;  - Update `backend/.env` with:

&nbsp;    ```env

&nbsp;    DB\_CONNECTION=mysql

&nbsp;    DB\_HOST=127.0.0.1

&nbsp;    DB\_PORT=3306

&nbsp;    DB\_DATABASE=ecommerce

&nbsp;    DB\_USERNAME=root

&nbsp;    DB\_PASSWORD=

&nbsp;    ```

&nbsp;  - Run migrations:

&nbsp;    ```bash

&nbsp;    cd backend

&nbsp;    php artisan migrate

&nbsp;    ```

&nbsp;  - Start server:

&nbsp;    ```bash

&nbsp;    php artisan serve

&nbsp;    ```

4\. \*\*Frontend Setup\*\*:

&nbsp;  - Navigate to `C:\\laragon\\www`.

&nbsp;  - Create React app:

&nbsp;    ```bash

&nbsp;    npx create-react-app frontend

&nbsp;    ```

&nbsp;  - Install Axios:

&nbsp;    ```bash

&nbsp;    cd frontend

&nbsp;    npm install axios

&nbsp;    ```

&nbsp;  - Start server:

&nbsp;    ```bash

&nbsp;    npm start

&nbsp;    ```

5\. \*\*Access Application\*\*:

&nbsp;  - Backend: http://localhost:8000 (or http://backend.test with Laragon)

&nbsp;  - Frontend: http://localhost:3000



\## Assumptions

\- Laragon is used as the local development environment.

\- MySQL has default credentials (root, no password).

\- Backend and frontend run on separate ports during development.



\## Extra Features

\- (To be added in later phases)



\## Project Structure

