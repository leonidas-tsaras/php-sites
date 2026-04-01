SELECT * FROM `user`
SELECT * FROM `user`  WHERE `user_id` = 2
SELECT * FROM `user`  WHERE `username` = 'Whiden'
SELECT `email` FROM `user` WHERE `user_id` = 3

SELECT * FROM `user` WHERE `username` = 'Whiden' AND  `password` = 'eikii3Ae'

INSERT INTO `user` (`username`, `email`, `password`, `avatar`) VALUES ( 'Carch1998', 'BettyMMatias@teleworm.us', 'ThiaSai6Oh', 'https://facebook.com/abc');

INSERT INTO `user` (`username`, `email`, `password`, `avatar`) 
VALUES ( 'Diagat', 'AliciaDFox@dayrep.com', 'Koo3Beisu', 'https://hotjobvacancies.com/avatar.jpg');

UPDATE `user` SET `email` = 'betty@teleworm.us' WHERE `user_id` = 1;
UPDATE `message` SET `status` = 'deleted' WHERE `message_id` = 1;


INSERT INTO `message` (`user_id`, `title`, `text`) VALUES ('1', 'new message', 'message text here');


SELECT `username` FROM `user`, `message` 
WHERE `user`.`user_id` = `message`.`user_id` 
AND `message_id` = 1

SELECT `username`, `title` FROM `user`, `message` 
WHERE `user`.`user_id` = `message`.`user_id` 
