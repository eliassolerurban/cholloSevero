use cholloSevero;
create table usuario(
    id int primary key auto_increment,
    nombre varchar(256) not null,
    login varchar(256) unique not null,
    password varchar(256) not null,
    rol enum("usuario", "administrador") not null
)
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;