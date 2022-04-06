```bash
# creates .env file from env.example
$ cp env.example .env
```

### ⚠️ Before the next command, make sure to set your preferred ```THEME_NAME``` in your .env file. Make sure to use dashes to seperate the words, i.e. ```ds-wp-theme```

```bash
# loads .env file and changes directory name to your preferred THEME_NAME
$ source .env && mv dev/themes/ds-wp-theme dev/themes/${THEME_NAME}
```

```bash
# installs everything and runs containers
$ docker-compose up

# shuts down containers
$ docker-compose down

# creates DB dump under wp-data folder
$ ./export.sh
```
