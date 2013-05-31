## Laravel Playground

Clone the repo. To see all remote branches, run

	git branch -a
	
If you're not seeing any newly added branches that may have been added since you first cloned the repo, run

	git fetch origin

To check out a remote branch:

	git checkout -b local-branch-name remotes/origin/remote-branch-name
	
For example:

		git checkout -b [form-model-crud] remotes/origin/form-model-crud


Included is [Shawn McCool's Vagrant setup](https://github.com/ShawnMcCool/vagrant-chef). Follow the instructions on his repo if you want to use it (make sure all required software is up to date etc.) and when ready, bring the VM up (`vagrant up`).

I'm using a mySQL database called `playground`. There's a MakeFile included with the Vagrant setup in `vagrant-chef/vagrant`. This has got a lot of nice helpers that we can run without having to ssh into the VM. To create our database:

	make createdb DBNAME="playground"
	
Default mySQL login for Shawn's Vagrant setup is `root/password` which is what this laravel-playground repo is preconfigured for.

__Note:__ On OSX I found that there was an issue when using the hostname `app.local` (it tries to look for Bonjour services first, which slows down requests) so use `app.dev` instead.