SELECT `token` FROM loginSystem_administrator WHERE userName = 'admin'; 
UPDATE `loginSystem_administrator` SET `api` = '1' WHERE `loginSystem_administrator`.`userName` = 'admin';