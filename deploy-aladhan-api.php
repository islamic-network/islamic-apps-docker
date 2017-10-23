<?php
shell_exec("cp -rf docker-compose-aladhan-api.yml docker-compose.yml");
echo shell_exec("rm -rf app");
echo shell_exec("git clone --depth=5 git@github.com:islamic-apps/aladhan-api.git app");
chdir("app");
echo shell_exec("composer install");
chdir("config");
echo shell_exec("mv config.docker.yml config.yml");
chdir("../../");
// Download Database
file_put_contents("db.zip", fopen("https://onedrive.live.com/download?cid=F6B3731D309AD56A&resid=F6B3731D309AD56A%21553740&authkey=AADPK_SgB9F0oS8", 'r'));
echo shell_exec('unzip db.zip');
// Run the SQL
echo shell_exec("docker-compose up > /dev/null &");
sleep(20);
echo "Importing Database \n";
echo shell_exec("mysql -udev -pdev -h0.0.0.0 -P13306 database < aladhan-db.sql");
echo shell_exec("rm db.zip");
echo shell_exec("rm aladhan-db.sql");
echo "Done!";
