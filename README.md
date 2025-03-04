# docker-php-sample

A simple PHP web application example made using [Docker's PHP Language Guide](https://docs.docker.com/language/php/).

### Building and running your application

1. Install [Docker for Windows](https://docs.docker.com/desktop/setup/install/windows-install/).

2. Make sure docker is running.

3. Run this command to install dependencies: `docker run --rm -v .://app -it composer:lts update`

    This will install dependencies in your `.vendor/` folder.

    To add more dependencies or SDKs, you can add them in the `libs/` folder and update the composer.json file accordingly. Then run composer update again as mentioned above.

4. When you're ready, start your application by running: `docker compose up --build`.

   Your application will be available at http://localhost:9000.

   For example, you can open http://localhost:9000/hello.php to see `src/hello.php` output.