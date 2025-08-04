CREATE DATABASE IF NOT EXISTS lifeboxme_matomo;
GRANT ALL PRIVILEGES ON lifeboxme_matomo.* TO 'lifeboxme_system'@'%' IDENTIFIED BY 'lifeboxme_system';
FLUSH PRIVILEGES;