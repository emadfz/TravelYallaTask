

## How to run this project

To run this project you need to have docker and docker-compose installed in your machine.

Take the following steps:

- clone this repository 
- change directory: 'cd TravelYallaTask'
- run command: 'docker-compose pull'
- run command: 'docker-compose up -d'
- run command: 'sudo chown -R 1000:1000 *'
- run command: 'docker-compose exec app setup'
- run command: 'docker-compose exec app permissions'
- run command: 'docker-compose exec app fix'
- run command: docker-compose exec -it app \bash
- php artisan passport:client --personal
 you will find the app running on port 80



patternes added:-
- Repository Pattern 
- Service Pattern 
