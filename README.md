# ddev-kartenforum
DDEV Development System for the SLUB Kartenforum

## Setup

1. Checkout the repository
2. Run the script ./start-basic.sh

### Setup for usage with a local version of the typo3 extension
In the following chapter `${}` indicate placeholders, which have to be filled by the user.

1. Make sure the .ddev directory exists. If it exists go directly to 2, else follow the next steps.
  - a. run `./start-basic.sh` to start the ddev containers once
  - b. run `ddev stop` to shut the containers down again
2. Create the file `.ddev/docker-compose.override.yaml` and add following lines:
  ```
  version: '3.6'
  services: 
    web: 
      volumes:
        - ${path on host machine}:${path in container}
  ```
3. Modify the `composer.json` in order to load the local repository
  ```
  "repositories": { 
      "slub-web-kartenforum": { 
      "type": "path", // vorher war hier git
      "url": "${path in container (from the docker-compose.override.yaml)}",
      "options": { 
        "symlink": true 
        } 
      }, 
    },

    "require": {
      "slub/slub_web_kartenforum": "dev-main"
    }
  ```
4. Run `ddev composer update` in order for the changes to be applied


## TYPO3-Backend

Login: https://ddev-kartenforum.ddev.site/typo3/

Username: admin

Password: adminslub
