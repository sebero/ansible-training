Vagrant.configure("2") do |config|

    # Machine for tests (PHP upgrades, etc.)
    config.vm.define "apiserver", autostart: false do |this|
        this.vm.box = "chef/debian-7.7"
        this.vm.hostname = "apiserver"

        this.vm.network "private_network", ip: "172.16.0.2"
        this.vm.synced_folder ".", "/var/www"

        this.vm.provider "virtualbox" do |vb|
            vb.name = "API Server provisioned with Ansible (Vagrant)"
            vb.memory = 512
            vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
            vb.customize ["modifyvm", :id, "--hpet", "on"]
        end

        this.vm.provision "ansible" do |ansible|
            ansible.playbook = "docs/vagrant/playbook.yml"
        end
    end
end
