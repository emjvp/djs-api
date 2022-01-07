This is an api made in Laravel 8 and PHP 8.1


Method GET '/api/guests': returns a list of all guests.

Method GET '/api/guests/count-by-dj': returns a list of all guests counted by dj.

Method GET '/api/guests/count-by-locations': returns a list all guests counted by location.

Method GET '/api/leader-djs': returns a list all djs ordered by popularity.


- You have to install composer
- Then You have to create a folder named json_db into the route storage/app/ and 
  later put the guests.json file in this folder (storage/app/json_db/guests.json)