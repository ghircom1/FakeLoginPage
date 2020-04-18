1. Start up docker machine `$ docker-machine start docker`
2. Run env command `$ docker-machine env docker`
3. Run the following in git bash:
    
    `eval $(docker-machine env default --shell linux)` (if needed)
    `docker info` (if needed)
    `make` (starts website)

4. access http://localhost:1234 inside another virtual machine using http://10.0.2.2:1234