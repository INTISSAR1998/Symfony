#################################################################################################################
#  note: you should have symfony binary in your machine if you don't have it you can install from the link below#
#  https://get.symfony.com/cli/setup.exe                                                                        #
#################################################################################################################

unzip the file in your desktop then open your cmd (console ) and run:
cd E-Learning

#################################################################################################################
# note: if your Mysql version < 8  let's say your version 5.7 you should go to .env file and change it to match #
# yours. ( in my case DATABASE_URL="mysql://root:@127.0.0.1:3306/E-Learning?serverVersion=8") just change the   #
#last number to 5.7 if that's your version.                                                                     #
#################################################################################################################
after that
# run :
1- symfony console doctrine:database:create
2- symfony console make:migration
3- symfony console doctrine:migrations:migrate
4- symfony serve -d
5- open your localhost https://127.0.0.1:8000/
6- in order to acess the admin erea /admin or /login route (https://127.0.0.1:8000/login | https://127.0.0.1:8000/admin) 



to create an admin user you have to open phpmyadmin then :
1- write whatever you want in username filed ( in my case i write admin)
2-write inside the role filed: ["ROLE_ADMIN"]
3- wait u can't type your passord  because it should be a hashed password ( for the sake of security) so all you have to do is:
open your terminale( cmd ) and run:
symfony console security:hash-password
then choice 0
then type admin
then copy and paste the passwordhash inside password filed in phpmyAdmin 


that's it enjoyyyyyyy :) 