### Run locally with xampp

1. Run xampp as admin
2. Start apache and mysql
3. Open browser to http://localhost/fakebank or http://10.0.2.2/fakebank on vm
4. To update localhost, copy whatever files you updated to C:xampp/htdocs/fakebank



### Run locally with docker

1. Start up docker machine `$ docker-machine start docker`
2. Run env command `$ docker-machine env docker`
3. Run the following in git bash:
    
    `eval $(docker-machine env default --shell linux)` (if needed)
    `docker info` (if needed)
    `make` (starts website)

4. access http://localhost:1234 inside another virtual machine using http://10.0.2.2:1234