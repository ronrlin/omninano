README.md

Instructions for creating a new instance of OmniNano.org.

# Install Ubuntu (14.04 or latest)

# Update packages
sudo apt-get update -y

# Install Nginx
sudo apt-get install nginx

# Install PHP

# Install Sendmail
sudo apt-get install sendmail

# Install Docker. 
sudo apt-get install -y docker

# Start the Docker service.
sudo wget -qO- https://get.docker.com/ | sh

# Make it so the ubuntu user is in the docker group
sudo usermod -aG docker ubuntu

# Configure Git:
git config --global user.name "Ron Lin"
git config --global user.email "ronrlin@gmail.com"

# Generate a keypair for this server to access git
ssh-keygen -t rsa -C "ronrlin@gmail.com"

# Now, copy and paste the key into github.
Rename the keys so that they are default.
Make sure names are default (id_rsa, id_rsa.pub)

# Clone the application finally.
git clone git@github.com:ronrlin/omninano.git omninano
cd omninano

# Restart nginx and php-fpm
sudo service nginx restart
sudo service php-fpm restart


