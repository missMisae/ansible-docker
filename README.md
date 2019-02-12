# Ansible
## In this repository I will be demonstrating how to use ansible to run and manage docker containers. 

## Installing Ansible 

#### get updates 
>sudo apt-get updpate

#### install packages
>sudo apt-get install software-properties-common

#### add ansible repository
>sudo apt-add-repository --yes --update ppa:ansible/ansible

#### install ansible 
>sudo apt-get install ansible 

#### verify that ansible installed 
>ansible --version

#### success! 

## What is Ansible? 

* IT automation and orchestration engine meaning...
  * ansible is a simple **automation language** that allows you to describe an IT application infastructure with *playbooks* 
  * automation engine **runs** the playbooks 
## What Makes Ansible so Baller? 
* Ansible is **Agentless** meaning... 
  * no agents or softwares need to be installed on the systems your automating on, only the control node needs to have ansible installed
* ansible is not painful to read- very simpple syntax 
* ansible can be powerful 

## How to Run it? 

#### Ad-hoc
> ansible <inventory> -m 
 
#### Playbooks 
> ansible-playbook sample_playbook.yml

#### Automation Framework
> Ansible Tower

#### Setting up the Hosts file for local deployment 
https://www.tricksofthetrades.net/2017/10/02/ansible-local-playbooks/ 

## Explanation of Files in this Repo

#### php directory 
* all files relevant to CRUD operations 
* PHP dockerfile
####  mysql directory
* mySQL dockerfile
* create user and create data sql file
#### buildContainer-playbook.yml
* an ansible script to build two images, two containers a network and link containers. 
* run by ansible-playbook -K buildContainer-playbook.yml
#### checkLocalhostPlaybook.yml
* an ansible script that verifies the client ansible is deploying to- in this repo local
#### clean-docker.sh
* a bash script to clean docker containers and images for the sake of building/rebuilding images and containers to get it right.
#### To View This Container in your broswer
* clone the repo 
* run the buildContainer-playbook.yml file 
* navigate to your browswer and type localhost:8080 in your search bar
