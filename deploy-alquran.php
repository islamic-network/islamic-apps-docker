<?php
shell_exec("cp -rf docker-compose-alquran.yml docker-compose.yml");
echo shell_exec("rm -rf app");
echo shell_exec("git clone --depth=5 git@github.com:islamic-apps/alquran-web-app.git app");
chdir("app");
echo shell_exec("composer install -vvv");
chdir("../");
echo shell_exec("docker-compose up");
