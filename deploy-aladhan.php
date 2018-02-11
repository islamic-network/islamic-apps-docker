<?php
shell_exec("cp -rf docker-compose-aladhan.yml docker-compose.yml");
echo shell_exec("rm -rf app");
echo shell_exec("mkdir app");
chdir("app");
echo shell_exec("git clone --depth=5 git@github.com:islamic-apps/aladhan-web-app.git app");
chdir("app");
echo shell_exec("composer install");
chdir("../../");
echo shell_exec("docker-compose up");
