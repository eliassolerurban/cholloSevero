use cholloSevero;
create table if not exists chollo(
    id int primary key auto_increment,
    titulo varchar(256) not null,
    precio decimal(10,2) not null,
    id_usuario int,
    descripcion text not null,
    fecha date not null,
    votos int default 0 not null,
    constraint FK_CHO_USU foreign key (id_usuario) references usuario(id)
)
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;
