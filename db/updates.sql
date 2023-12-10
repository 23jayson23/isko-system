ALTER TABLE scholar
ADD COLUMN remarks VARCHAR(255) AFTER status;

UPDATE `user` SET `password` = 'e64b78fc3bc91bcbc7dc232ba8ec59e0' WHERE `userid` = '1'