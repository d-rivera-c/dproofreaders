# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
    config.vm.box = "ubuntu/xenial64"
    config.vm.network "private_network", ip: "192.168.33.11"
    config.vm.hostname = "pgdp-dev"
    config.vm.synced_folder ".", "/var/www/html/c", :nfs => { :mount_options => ["dmode=777","fmode=666"] }

    # Define the bootstrap file: A (shell) script that runs after first setup of your box (= provisioning)
    config.vm.provision :shell, path: "vagrant.sh"
end

# TEST
# ubuntu 16.04
# php 7.028
# mysql 5.7.21

# BOX
# ubuntu 
# php 7.0.28
# apache 2.4.18
# mysql 5.7.21