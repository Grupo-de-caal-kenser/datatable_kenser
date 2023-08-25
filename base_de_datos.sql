create table aplicacion (
app_id serial,
app_nombre varchar(50),
app_situacion smallint default 1,
primary key (app_id)
)
create table rol (
rol_id serial,
rol_nombre varchar(50),
rol_nombre_ct varchar(10),
rol_app integer,
rol_situacion smallint default 1,
primary key (rol_id),
foreign key (rol_app) references aplicacion (app_id)
)
create table usuario(
usu_id serial,
usu_nombre varchar(50),
usu_catalogo integer,
usu_password lvarchar,
usu_situacion smallint default 1,
primary key (usu_id)
)
create table permiso (
permiso_id serial,
permiso_usuario integer,
permiso_rol integer,
permiso_situacion smallint default 1,
primary key (permiso_id),
foreign key (permiso_rol) references rol (rol_id),
foreign key (permiso_usuario) references usuario
(usu_id)
);
CREATE TABLE detalle_ventas (
detalle_id SERIAL NOT NULL,
detalle_venta INTEGER NOT NULL,
detalle_producto INTEGER NOT NULL,
detalle_cantidad SMALLINT NOT NULL,
detalle_situacion CHAR(1) DEFAULT '1',
PRIMARY KEY(detalle_id),
FOREIGN KEY (detalle_venta) REFERENCES ventas(venta_id),
FOREIGN KEY (detalle_producto) REFERENCES pproductos(producto_id)
);
insert into aplicacion (app_nombre) values ('TIENDA');

insert into aplicacion (app_nombre) values ('TIENDA');

insert into rol (rol_nombre, rol_nombre_ct, rol_app ) values ('ADMINISTRADOR DE TIENDA', 'TIENDA_ADMIN', 1);
insert into rol (rol_nombre, rol_nombre_ct, rol_app ) values ('USUARIO DE TIENDA', 'TIENDA_USER', 1);

insert into usuario (usu_nombre, usu_catalogo, usu_password ) values

('KENSER OMAR', 665406, '$2y$10$Nz6/ESQw7b7xW1Q2j.WEM.g5LQ/NSSmHnhZpfolFAH.ltD0GGRKGS');

insert into permiso (permiso_usuario, permiso_rol) values (1, 1);