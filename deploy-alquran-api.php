<?php
shell_exec("cp -rf docker-compose-alquran-api.yml docker-compose.yml");
echo shell_exec("rm -rf app");
echo shell_exec("git clone --depth=5 git@github.com:islamic-apps/alquran-api.git app");
chdir("app");
echo shell_exec("composer install");
chdir("config");
echo shell_exec("mv doctrineBootstrap.docker.php doctrineBootstrap.php");
chdir("../../");
// Download Database
file_put_contents("db.zip", fopen("https://onedrive.live.com/download?cid=F6B3731D309AD56A&resid=F6B3731D309AD56A%21553739&authkey=APT5Immj1qM1Iuw", 'r'));
echo shell_exec('unzip db.zip');
// Run the SQL
echo shell_exec("docker-compose up > /dev/null &");
sleep(20);
echo "Importing Database \n";
echo shell_exec("mysql -udev -pdev -h0.0.0.0 -P13306 database < alquran-db.sql");
echo shell_exec("rm db.zip");
echo shell_exec("rm alquran-db.sql");
echo "Done!";
