# scores-storage
Build a framework to help the scores storage work

# Run db migration
- go to local folder `/Volumes/lde-code/scores-storage` and run
```bash
symfony console make:migration
symfony console doctrine:migrations:migrate
```

if you just run `php bin/console make:migration` it will have the db connection issue, because the command doesn't have access to the Docker environment variables
