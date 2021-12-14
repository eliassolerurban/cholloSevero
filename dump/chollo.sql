use cholloSevero;
create table chollo(
    id int primary key auto_increment,
    titulo varchar(256) not null,
    precio decimal(10,2) not null,
    id_usuario int,
    descripcion varchar(2048) not null,
    fecha date not null,
    votos int
    constraint FK_CHO_USU foreign key (id_usuario) references usuario(id)
)
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;