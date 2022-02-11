# PHP Quickstart

This repository contains a simple web application that demonstrates how to quickly connect to and communicate with a [MariaDB](https://mariadb.com) database using [PHP](https://www.php.net/) (via [mysqli](https://www.php.net/manual/en/book.mysqli.php)). 

<p align="center" spacing="10">
    <kbd>
        <img src="media/demo.gif" />
    </kbd>
</p>

> ⚠️ Interested in using MariaDB and PHP with [PDO (PHP Data Objects)](https://www.php.net/manual/en/book.pdo.php)? Check out the quickstart [here](https://github.com/mariadb-developers/php-pdo-quickstart)!

## Getting Started

The application in this repository demonstrates how to:

* Connect to a MariaDB database using `mysqli`
* Execute queries (`SELECT`, `UPDATE`, `INSERT` and `DELETE`) to manage _contact_ data (like a digital [rolodex](https://en.wikipedia.org/wiki/Rolodex))
* Use prepared statements

### Prepare the database

The application relies on a single database (`rolodex`) that contains a single table (`contacts`). You can find the necessary SQL for setting up the environment in [schema.sql](schema.sql).

### Run the application

After you've [pulled down this repository](https://git-scm.com/docs/git-clone), follow these steps to get the app up and running:

1. Update the database configuration settings in [config.php](src/config.php) (which is used across the app) to point to _your_ MariaDB database.

    _Example configuration:_

    ```php
    $databaseHost = '127.0.0.1';
    $databaseUsername = 'user_name';
    $databasePassword = '********';
    $databaseName = 'rolodex';
    ```

    **Note:** Check out the [config_skysql.php](src/config_skysql.php) file for an example of how to connect to [MariaDB SkySQL](https://mariadb.com/skyview).

2. Run the application using the [built-in web server](https://www.php.net/manual/en/features.commandline.webserver.php).

    ```bash
    $ php -S localhost:5000
    ```

## Helpful Resources

* [MariaDB Quickstart](https://github.com/mariadb-developers/mariadb-getting-started)
* [Official MariaDB Documentation](https://mariadb.com/docs)

## Support and Contribution

Please feel free to submit PR's, issues or requests to this project directly.

If you have any other questions, comments, or looking for more information on MariaDB please check out:

* [MariaDB Developer Hub](https://mariadb.com/developers)
* [MariaDB Community Slack](https://r.mariadb.com/join-community-slack)

Or reach out to us directly via:

* [developers@mariadb.com](mailto:developers@mariadb.com)
* [MariaDB Twitter](https://twitter.com/mariadb)

## License <a name="license"></a>
[![License](https://img.shields.io/badge/License-MIT-blue.svg?style=plastic)](https://opensource.org/licenses/MIT)
