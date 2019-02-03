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
 
## Explanation of Files in this Repo
### ansible.cfg
* I will be deploying containers locally, I don't have access to remote servers. Thus, I needed to create a cfg file in my local git repository to tell ansible- *"hey- I wont be using the global /etc/ansible/hosts file, I will be using the hosts file in this directory."* 
### hosts
* This is the hosts file I was refering to above, which is just pointing to my localhost
### checkLocalhostPlaybook.yml
* this yml file served to demonstarte that this configuration works and that ansible is reporting to my localhost! 

