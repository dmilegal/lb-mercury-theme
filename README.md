# Wordpress Docker Template

WordPress template for local development and production.

#### Requirements:

- docker: ^20.10.12
- docker compose: ^2.2.3
- node: ^16.13.2

**for Windows:**

- Git Bash or Ubuntu subsystem

## How Use

Run dev container:

    ./run.sh -d

Run prod container:

    ./run.sh -p

More info about commands:

    ./run.sh -h

If you have problems with accessibility of creating/saving files or directories on your local machine, use the following command

    sudo chmod -R a+rwX .
