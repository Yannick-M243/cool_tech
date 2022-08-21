Clone the repo

    ```sh
    git clone https://github.com/Yannick-M243/cool_tech.git
    ```

-   Switch to the repo folder

    ```sh
    cd cool_tech
    ```

-   Install all the dependencies using composer

    ```sh
    composer install
    ```

-   Copy the example env file and make the required configuration changes in the .env file

    ```sh
    cp .env.example .env
    ```

-   Update .env

    ```env
    DB_CONNECTION=mysql
    B_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=test
    DB_USERNAME=test
    DB_PASSWORD=root
    ```

