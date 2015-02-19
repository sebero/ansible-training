# ansible-training
Training repository for ansible installations. Vagrant required.

## API sample
This repository install an API basic configuration for development environment.

First clone this repository:

        git clone https://github.com/sebero/ansible-training.git


Update your /etc/hosts file, adding the following line:

        echo '172.16.0.2 api.local' >> /etc/hosts


Then run the vagrant machine:


        vagrant up apiserver


Point your browser to:

    http://api.local/documentation
    
Let's play.
