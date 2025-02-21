# docker-php-sample

A simple PHP web application example made using [Docker's PHP Language Guide](https://docs.docker.com/language/php/).

### Building and running your application

Make sure docker is running.

Run this command to install dependencies:
`docker run --rm -v .://app -it composer:lts update`

This will install dependencies in your `.vendor/` folder.

To add more dependencies, you can add them in the `libs/` folder and update the composer.json file accordingly. Then run composer update again as mentioned above.

When you're ready, start your application by running:
`docker compose up --build`.

Your application will be available at http://localhost:9000.