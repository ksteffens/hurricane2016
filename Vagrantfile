# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/trusty64"
  #config.vm.box = "Glucoz/ubuntu-xenial-lamp"
  #config.vm.box = "webinfopro/ubuntu-xenial-lamp"
  config.vm.hostname = "hurricane"
  config.vm.network :forwarded_port, host: 8080, guest: 80
  config.vm.provider "virtualbox" do |v|
    v.memory = 2048
    v.cpus = 2
  end
  config.vm.provision :shell, path: "Vagrant.bootstrap.sh"
end