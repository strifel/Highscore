# Highscore
A simple php Highscore server
## WARNING
#### I DO NOT GUARANTEE FOR THE SAFETY OF THIS SOFTWARE. 
#### I DO NOT PROVIDE ANY WARRANTY
#### THIS SOFTWARE DEFINITELY CONTAINS SECURITY ISSUES (i have not found, yet)
## Disclaimer
You should know that as long the client provides the score/any information there is no proof that it is the real score.
This Tool I just wrote for small usage with friends, where I accept if somebody cheats.
## Installation
1. Put this all on some server.
2. Let some webserver point to the directory, but forbid access to `private`
3. Create the `private/score` directory
4. For each game create a `.score` file with the name of the game in the score directory and write a 0 (or any start value) into the file.
5. Point your game clients to the installation
6. Write custom validation in `verify.php` and enable in `config.php`
## Game client configuration / "API"
 - Only one endpoint `/`
 - Game will be set by game parameter e.g. `?game=test` 
 - GET Method will get the Score, POST will post the score
 - GET does not need more information
 - POST does need the score and verify (if enabled) in body as form-data
## Troubleshooting
If you are getting some errors first make sure the user of the webserver has write and read access to the score directory.