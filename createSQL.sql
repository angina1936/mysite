CREATE TABLE 'phones' (
  'id' INT UNSIGNED NOT NULL AUTO_INCREMENT,
  'name' VARCHAR NOT NULL COMMENR '名前',
  'OS' VARCHAR(45) NOT NULL COMMENT 'OS',
  'country' VARCHAR(45) NOT NULL COMMENT '国',
  'price' INT UNSIGNED NOT NULL,
  PRIMARY KEY ('id');
)

insert into 'users' ('name', 'OS', 'country', 'price')
  values ('iPhone13', 'iOS', 'USA', 98800);
