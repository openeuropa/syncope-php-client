# Syncope PHP client generation

To generate a new version of the library:
 
Run composer install. This should download OpenApi specification from Syncope and patch it afterwards to improve operationIds.
````
composer install
````

Spec file will be present in /generation/assets/openapi.json

Library can then be generated using OpenApi codegen invoked from the /generation folder. Templates and config used can be found in this folder.

To generate the library issue the following command:
````
docker run --rm -v ${PWD}/..:/local openapitools/openapi-generator-cli generate -i /local/generation/assets/openapi.json -g php -o /local/ -c /local/generation/config.json -t /local/generation/templates/php
````

