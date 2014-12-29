#Using Git#

Whenever a new change is made in a repository remember to:

1. Add

        git add FILENAME

2. Commit

        git commit -m "USEFUL_COMMENT_HERE"

3. Push when you are ready

        git push origin master

A repository's status can be checked via:

    git status

#Seting up access to our server#

- Our server's address is **54.149.232.134**

- You can connect to it via SSH using the appropriate key pem file with the following command:

                ssh -i my_pem.pem some_username@some_server

###SSH Shortcut###

- You can create a shortcut for this in UNIX systems (mac/linux) by creating a config file in textfile *~/.ssh/config*. You might have to create both the .ssh folder and config text file if it does not already exist. Ensure that the pem file is in the same ~/.ssh folder and the config text file should look similar to this:

        Host sunyk
                HostName 54.149.232.134
                IdentityFile ~/.ssh/SUNYK.pem
                User delvison

    - Now, you can login via SSH to the server via the following command:

                ssh sunyk

- Note that since git uses SSH to push content to a repository, creating this shortcut means that you wont have to type in your password everytime you push via git to the server
