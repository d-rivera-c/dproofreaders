# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
    config.vm.box = "ubuntu/xenial64"
    # config.vm.network "forwarded_port", guest: 80, host: 8080
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.hostname = "pgdp-dev"
    config.vm.synced_folder ".", "/var/www/html/c", :nfs => { :mount_options => ["dmode=777","fmode=666"] }

    # Define the bootstrap file: A (shell) script that runs after first setup of your box (= provisioning)
    config.vm.provision :shell, path: "vagrant.sh"

    # mailcatcher
    # config.vm.network "forwarded_port", guest: 1080, host: 1080
    # config.vm.network "forwarded_port", guest: 1025, host: 1025
end

# BOX
# ubuntu 16.04
# php 7.0.28
# apache 2.4.18
# mysql 5.7.21
# phpbb 3.2