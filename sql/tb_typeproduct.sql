-- Delete Table If Exists
DROP TABLE IF EXISTS tb_typeproduct ;

-- Create Table
CREATE TABLE tb_typeproduct (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  ty_name varchar(50) NOT NULL COMMENT 'ประเภทสินค้า',
  ty_status int(11) NOT NULL COMMENT 'สถานะใช้งาน'
);
