Waqq.ly is a web application for the registering of dog owners and dog walkers

Installing
This guide will use AWS as an example cloud service. 

Create an EC2 cloud instance using Linux x86
Set the security group policy to allow inbound traffic for ports 80 and 8081
SSH into your EC2 instance and then install Docker and Docker-Compose using sudo yum install docker 
and sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
and then using chmod with the command sudo chmod +x /usr/local/bin/docker-compose

Make a directory for this repository using mkdir

After installing docker install Git using sudo yum install git
Pull the repository from Github using this nesskorin/wagglyapp link

Install Apache's rewrite into the waqqly-backend docker container by entering the image using docker exec -it waggly-backend /bin/bash
apt-get install -y apache2
a2enmod rewrite
exit out of the container and commit to the name of the container 

Use docker-compose pull in order to get the mysql image
Then sudo docker-compose build followed by sudo docker-compose up

Test that the ip address of the instance works and the front end should be working

If there is an issue accessing the database find out the IP address of the running MySQL container using docker ps and docker inspect and
and docker cp to pull the file out of the container so waggly-backend:db/dbcalls.php and then use nano to edit the file and add in the current IP address of the running container
and then cp the file back into the container with cp dbcalls.php waggly-backend:db/dbcalls.php
You may also need to edit the my.cnf file out of this container from /var/lib/mysql/my/cnf as well and ensure that the bind is correct with the cp command copying out the my.cnf files from the sql container
and then editing it to ensure that the IP address is correct using nano and add the line bind-address=127.0.0.1
Rewrite and exit, copy the file back into the container using my.cnf /var/lib/mysql/my/cnf
Commit the changes and exit out of the container
